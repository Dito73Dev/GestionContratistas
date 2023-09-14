<?php
class EditSignaturePad extends UserControl
{
	protected $height;
	protected $width;
	protected $bgcolor;
	protected $required;
	protected $folder;
	protected $bgimage;
	protected $color;
	protected $linew;
	protected $saveEmptyImage;

	public function initUserControl()
	{
		$this->required = false;
		$this->width = 300;
		$this->height = 100;
		$this->bgcolor = "#ffffff";
		$this->bgimage = "";
		$this->folder = "files";
		$this->linew = 2;
		$this->color = "#145394";
		$this->saveEmptyImage = false;
		$this->target = "";
		$this->clearcolor = "";

		if (isset($this->settings["width"]))
			$this->width = $this->settings["width"];
		if (isset($this->settings["height"]))
			$this->height = $this->settings["height"];
		if (isset($this->settings["bgcolor"]))
			$this->bgcolor = $this->settings["bgcolor"];
		if (isset($this->settings["bgimage"]))
			$this->bgimage = $this->settings["bgimage"];
		if (isset($this->settings["required"]))
			$this->required = $this->settings["required"];
		if (isset($this->settings["folder"]))
			$this->folder = $this->settings["folder"];
		if (isset($this->settings["color"]))
			$this->color = $this->settings["color"];
		if (isset($this->settings["linewidth"]))
			$this->linew = $this->settings["linewidth"];
		if (isset($this->settings["saveEmptyImage"]))
			$this->saveEmptyImage = $this->settings["saveEmptyImage"];
		if (isset($this->settings["target"]))
			$this->target = $this->settings["target"];
		if (isset($this->settings["clearcolor"]))
			$this->clearcolor = $this->settings["clearcolor"];

		if($this->bgimage)
			$this->bgcolor = "transparent";

		$this->addJSSetting("bgImage", $this->bgimage);
		$this->addJSSetting("width", $this->width);
		$this->addJSSetting("height", $this->height);
		$this->addJSSetting("lineWidth", $this->linew);
		$this->addJSSetting("required", $this->required);
		if(!$this->bgimage)
			$this->addJSSetting("bgColor", $this->bgcolor);
		else
			$this->addJSSetting("bgColor", "transparent");

		$this->addJSSetting("lineColor", $this->color);
		$this->addJSSetting("cfield", $this->cfield);
	}

	public function buildUserControl($value, $mode, $fieldNum = 0, $validate, $additionalCtrlParams, $data)
	{
		
		$_SESSION["db_bgimage"] = base64_encode($value);
		if($value){
			$arr = my_json_decode($value);
			if(is_array($arr[0]))
				$_SESSION["file_".$this->cfield] = $arr[0]["name"];
			else
				$_SESSION["file_".$this->cfield] = "";
			if($this->target!="db" || !$_SESSION["db_bgimage"]){
				if(file_exists($_SESSION["file_".$this->cfield]))
					$bgimage = $_SESSION["file_".$this->cfield];
				else
					$bgimage = $this->bgimage;
			}
			else{
				$bgimage = base64_encode($value);
			}
		}
		else{
			$bgimage = $this->bgimage;
			$_SESSION["file_".$this->cfield] = "";
		}

		$cssstyle = "";
		if($bgimage){
			if($this->target!="db" || !$_SESSION["db_bgimage"])
				$cssstyle = "style='background: url(".$bgimage.") no-repeat;'";
			else
				$cssstyle = "style=\"background: url('data:image/png;base64,".$bgimage."') no-repeat;\"";
		}
		else
			$cssstyle = "style='background: ".$this->bgcolor."'";
		$clearcolor = "";
		if($this->clearcolor)
			$clearcolor = "style='color:".$this->clearcolor."'";
		echo '<div id="sigPad_'.$this->cfield.'" class="sigPad" style="width: '.($this->width+2).'px;">
			<ul class="sigNav">
				<li class="clearButton"><a href="#clear" '.$clearcolor.'">Clear</a></li>
			</ul>
			<div class="sig sigWrapper" id="sig_'.$this->cfield.'">
				<div class="typed"></div>
				<canvas class="spad pad_'.$this->cfield.'" width="'.$this->width.'" height="'.$this->height.'" '.$cssstyle.' bgimage="'.$this->bgimage.'"></canvas>
				<input id="'.$this->cfield.'" type="hidden" '.'name="'.$this->cfield.'" class="output">
			</div>
		</div>';
	}

	function getUserSearchOptions()
	{
		return array(EQUALS, STARTS_WITH, NOT_EMPTY, NOT_EQUALS);
	}

	/**
	 * addJSFiles
	 * Add control JS files to page object
	 */
	function addJSFiles()
	{
		$this->pageObject->AddJSFile("json2.min.js");
		$this->pageObject->AddJSFile("jquery.signaturepad.js", "json2.min.js");
	}

	/**
	 * addCSSFiles
	 * Add control CSS files to page object
	 */
	function addCSSFiles()
	{
		$this->pageObject->AddCSSFile("jquery.signaturepad.css");
	}

	function readWebValue(&$avalues, &$blobfields, $legacy1, $legacy2, &$filename_values)
	{
		if($this->target!="db" || !$_SESSION["db_bgimage"]){
			if(file_exists($_SESSION["file_".$this->cfield])){
				$bgimage = $_SESSION["file_".$this->cfield];
				$this->bgcolor = "transparent";
			}
			else
				$bgimage = $this->bgimage;
		}
		else{
			$bgimage = $_SESSION["db_bgimage"];
			if($bgimage)
				$this->bgcolor = "transparent";
		}
		/*if(substr($bgimage,0,4) == "http"){
			$content = myurl_get_contents( $bgimage );
			$bgfilename= $this->folder."/bgsigpad_".generatePassword(8).".png";
			$bgimage = $bgfilename;
			runner_save_file(getabspath($bgfilename), $content);
		}*/

		$this->getPostValueAndType();
		if( FieldSubmitted($this->goodFieldName."_".$this->id) )
			$this->webValue = prepare_for_db($this->field, $this->webValue, $this->webType);
		else
			$this->webValue = false;
		
		if( $this->webValue || $this->saveEmptyImage)
		{
			// save signature to file
			require_once 'signature-to-image.php';
			$img = sigJsonToImage($this->webValue, array(
									'imageSize' => array($this->width, $this->height)
									,'bgColour' => $this->bgcolor
									,'penWidth' => $this->linew
									,'penColour' => $this->color
				));
			
			if($this->target!="db"){
				makeSurePathExists($this->folder);
				$filename= $this->folder."/".generatePassword(15).".png";
				imagepng($img, $filename);
				$img2 = $img;
			}
		/*	else{
				ob_start (); 
				imagepng($img);
				ob_end_clean (); 
			}*/
			
			if($bgimage ){
				$img2 = imagecreatetruecolor($this->width, $this->height);
				$trans_colour = imagecolorallocate($img2, 255, 255, 255);
				imagefill($img2, 0, 0, $trans_colour);
				if($this->target!="db" || !$_SESSION["db_bgimage"]){
					$ext = CheckImageExtension($bgimage);
					if($ext == ".PNG")
						$source = imagecreatefrompng($bgimage);
					elseif($ext == ".JPEG" || $ext == ".JPG")
						$source = imagecreatefromjpeg($bgimage);
					else
						$source = imagecreatefromgif($bgimage);

					$source_size = getimagesize($bgimage);
				}
				else{
					$source = imagecreatefromstring(base64_decode($bgimage));
					$source_size = getimagesizefromstring(base64_decode($bgimage));
				}
				imagecopyresized($img2, $source, 0, 0, 0, 0, $source_size[0], $source_size[1], $source_size[0], $source_size[1]);
				imagecopy($img2, $img, 0, 0, 0, 0, $this->width, $this->height);
			}
			
			if($this->target!="db"){
				imagepng($img2, $filename);
				$filesize = filesize($filename);
				if( !($this->webValue === false) )
				{
					$result[] = array("name" => $filename,
					"usrName" => 'signature.png', "size" => $filesize, "type" => "image/png",
					"searchStr" => 'signature.png'.":sStrEnd");
					$webValue = my_json_encode($result);
					$avalues[ $this->field ] = $webValue;
				}
			}
			else{
				ob_start(); 
				imagepng($img2);
				$webValue = ob_get_contents(); 
				ob_end_clean (); 
				$avalues[ $this->field ] = $webValue;
			}
				

			// prepare image info to be saved in db
			if(file_exists($_SESSION["file_".$this->cfield] && $_SESSION["file_".$this->cfield]!=$this->bgimage)){
				unlink($_SESSION["file_".$this->cfield]);
				unset($_SESSION["file_".$this->cfield]);
			}
			
			imagedestroy($img);
			imagedestroy($img2);
		}
		elseif($_SESSION["delsigfile"]){
			$avalues[ $this->field ] = "";
			$_SESSION["delsigfile"] = "";
		}
		//unlink($bgfilename);
	}
}
?>
<?php

include_once(getabspath("connections/ConnectionManager_base.php"));

class ConnectionManager extends ConnectionManager_Base
{
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		include_once getabspath("connections/Connection.php");

		$data = $this->_connectionsData[ $connId ];
		switch( $data["connStringType"] )
		{
			case "mysql":
				if( useMySQLiLib() )
				{
					include_once getabspath("connections/MySQLiConnection.php");
					return new MySQLiConnection( $data );
				}

				include_once getabspath("connections/MySQLConnection.php");
				return new MySQLConnection( $data );

			case "mssql":
			case "compact":
				if( useMSSQLWinConnect() )
				{
					include_once getabspath("connections/MSSQLWinConnection.php");
					return new MSSQLWinConnection( $data );
				}
				if( isSqlsrvExtLoaded() )
				{
					include_once getabspath("connections/MSSQLSrvConnection.php");
					return new MSSQLSrvConnection( $data );
				}

				if( function_exists("mssql_connect") ) {
					include_once getabspath("connections/MSSQLUnixConnection.php");
					return new MSSQLUnixConnection( $data );
				}

				if( class_exists("PDO") ) {
					include_once getabspath("connections/PDOConnection.php");
					$drivers = pdo_drivers();
					if( in_array( "sqlsrv", $drivers) )
					{
						$data["PDOString"] = "sqlsrv:Server=" . $data["connInfo"][0] . ";Database=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );
					}
					if( in_array( "dblib", $drivers) )
					{
						$data["PDOString"] = "dblib:host=" . $data["connInfo"][0] . ";dbname=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );
					}
				}
				echo "No SQL Server driver found in your PHP settings.";
				if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
					echo "<br>To enable SQL Server support add the following line to php.ini file:";
					echo "<br>extension=php_com_dotnet.dll";
				}
				exit();

			case "msaccess":
			case "odbc":
			case "odbcdsn":
			case "custom":
			case "file":
				if( stripos($data["ODBCString"], 'Provider=') !== false )
				{
					include_once getabspath("connections/ADOConnection.php");
					return new ADOConnection( $data );
				}

				include_once getabspath("connections/ODBCConnection.php");
				return new ODBCConnection( $data );

			case "oracle":
				include_once getabspath("connections/OracleConnection.php");
				return new OracleConnection( $data );

			case "postgre":
				include_once getabspath("connections/PostgreConnection.php");
				return new PostgreConnection( $data );

			case "db2":
				include_once getabspath("connections/DB2Connection.php");
				return new DB2Connection( $data );

			case "informix":
				include_once getabspath("connections/InformixConnection.php");
				return new InformixConnection( $data );

			case "sqlite":
				include_once getabspath("connections/SQLite3Connection.php");
				return new SQLite3Connection( $data );
			case "pdo":
				include_once getabspath("connections/PDOConnection.php");
				return new PDOConnection( $data );
		}
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();

		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "dbct_at_localhost";
		$data["connName"] = "dbct at 127.0.0.1";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;127.0.0.1;root;1qaz2wsx;3307;dbct;;1"; //currently unused

		$this->_connectionsIdByName["dbct at 127.0.0.1"] = "dbct_at_localhost";

		$data["connInfo"] = array();
		$data["ODBCUID"] = "root";
		$data["ODBCPWD"] = "1qaz2wsx";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";

		$data["DBPath"] = "db"; //currently unused
		$data["useServerMapPath"] = 1; //currently unused

		
		//	Don't change any of these lines manually!
		//	Use 'Server database connections' feature on the Output screen in PHPRunner instead.
		$data["connInfo"][0] = "127.0.0.1";
		$data["connInfo"][1] = "root";
		$data["connInfo"][2] = "1qaz2wsx";
		$data["connInfo"][3] = "3307";
		$data["connInfo"][4] = "dbct";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 3.51 Driver};Server=127.0.0.1;Uid=root;Pwd=1qaz2wsx;Port=3307;Database=dbct;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["dbct_at_localhost"] = $data;
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "dbusers_at_127_0_0_1";
		$data["connName"] = "dbusers at 127.0.0.1";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;127.0.0.1;root;1qaz2wsx;3307;dbusers;;1"; //currently unused

		$this->_connectionsIdByName["dbusers at 127.0.0.1"] = "dbusers_at_127_0_0_1";

		$data["connInfo"] = array();
		$data["ODBCUID"] = "root";
		$data["ODBCPWD"] = "1qaz2wsx";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";

		$data["DBPath"] = "db"; //currently unused
		$data["useServerMapPath"] = 1; //currently unused

		
		//	Don't change any of these lines manually!
		//	Use 'Server database connections' feature on the Output screen in PHPRunner instead.
		$data["connInfo"][0] = "127.0.0.1";
		$data["connInfo"][1] = "root";
		$data["connInfo"][2] = "1qaz2wsx";
		$data["connInfo"][3] = "3307";
		$data["connInfo"][4] = "dbusers";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 3.51 Driver};Server=127.0.0.1;Uid=root;Pwd=1qaz2wsx;Port=3307;Database=dbusers;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["dbusers_at_127_0_0_1"] = $data;
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "edl_at_127_0_0_1";
		$data["connName"] = "dbedl at 127.0.0.1";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;127.0.0.1;root;1qaz2wsx;3307;dbedl;;1"; //currently unused

		$this->_connectionsIdByName["dbedl at 127.0.0.1"] = "edl_at_127_0_0_1";

		$data["connInfo"] = array();
		$data["ODBCUID"] = "root";
		$data["ODBCPWD"] = "1qaz2wsx";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";

		$data["DBPath"] = "db"; //currently unused
		$data["useServerMapPath"] = 1; //currently unused

		
		//	Don't change any of these lines manually!
		//	Use 'Server database connections' feature on the Output screen in PHPRunner instead.
		$data["connInfo"][0] = "127.0.0.1";
		$data["connInfo"][1] = "root";
		$data["connInfo"][2] = "1qaz2wsx";
		$data["connInfo"][3] = "3307";
		$data["connInfo"][4] = "dbedl";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 3.51 Driver};Server=127.0.0.1;Uid=root;Pwd=1qaz2wsx;Port=3307;Database=dbedl;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["edl_at_127_0_0_1"] = $data;
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "contratacion_at_172_18_0_115";
		$data["connName"] = "dbct1 at 127.0.0.1";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;127.0.0.1;root;1qaz2wsx;3307;dbct;;1"; //currently unused

		$this->_connectionsIdByName["dbct1 at 127.0.0.1"] = "contratacion_at_172_18_0_115";

		$data["connInfo"] = array();
		$data["ODBCUID"] = "root";
		$data["ODBCPWD"] = "1qaz2wsx";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";

		$data["DBPath"] = "db"; //currently unused
		$data["useServerMapPath"] = 1; //currently unused

		
		//	Don't change any of these lines manually!
		//	Use 'Server database connections' feature on the Output screen in PHPRunner instead.
		$data["connInfo"][0] = "127.0.0.1";
		$data["connInfo"][1] = "root";
		$data["connInfo"][2] = "1qaz2wsx";
		$data["connInfo"][3] = "3307";
		$data["connInfo"][4] = "dbct";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 3.51 Driver};Server=127.0.0.1;Uid=root;Pwd=1qaz2wsx;Port=3307;Database=dbct;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["contratacion_at_172_18_0_115"] = $data;
		$this->_connectionsData = &$connectionsData;
	}

	/**
	 * Close db connections
	 * @destructor
	 */
	function __desctruct()
	{
		$this->CloseConnections();
	}
}
?>
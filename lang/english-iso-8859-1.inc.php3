<?php
/* $Id$ */

$charset = 'iso-8859-1';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';

$strAPrimaryKey = 'A primary key has been added on %s';
$strAccessDenied = 'Access denied';
$strAction = 'Action';
$strAddDeleteColumn = 'Add/Delete Field Columns';
$strAddDeleteRow = 'Add/Delete Criteria Row';
$strAddNewField = 'Add new field';
$strAddPriv = 'Add a new Privilege';
$strAddPrivMessage = 'You have added a new privilege.';
$strAddSearchConditions = 'Add search conditions (body of the "where" clause):';
$strAddToIndex = 'Add to index &nbsp;%s&nbsp;column(s)';
$strAddUser = 'Add a new User';
$strAddUserMessage = 'You have added a new user.';
$strAffectedRows = 'Affected rows:';
$strAfter = 'After %s';
$strAfterInsertBack = 'Go back to previous page';
$strAfterInsertNewInsert = 'Insert another new row';
$strAll = 'All';
$strAllTableSameWidth = 'display all Tables with same width?';
$strAlterOrderBy = 'Alter table order by';
$strAnIndex = 'An index has been added on %s';
$strAnalyzeTable = 'Analyze table';
$strAnd = 'And';
$strAny = 'Any';
$strAnyColumn = 'Any Column';
$strAnyDatabase = 'Any database';
$strAnyHost = 'Any host';
$strAnyTable = 'Any table';
$strAnyUser = 'Any user';
$strAscending = 'Ascending';
$strAtBeginningOfTable = 'At Beginning of Table';
$strAtEndOfTable = 'At End of Table';
$strAttr = 'Attributes';

$strBack = 'Back';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binary';
$strBinaryDoNotEdit = 'Binary - do not edit';
$strBookmarkDeleted = 'The bookmark has been deleted.';
$strBookmarkLabel = 'Label';
$strBookmarkQuery = 'Bookmarked SQL-query';
$strBookmarkThis = 'Bookmark this SQL-query';
$strBookmarkView = 'View only';
$strBrowse = 'Browse';
$strBzip = '"bzipped"';

$strCannotLogin = 'Cannot login to MySQL server';
$strCantLoadMySQL = 'cannot load MySQL extension,<br />please check PHP Configuration.';
$strCantLoadRecodeIconv = 'Can not load iconv or recode extension needed for charset conversion, configure php to allow using these extensions or disable charset conversion in phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Can\'t rename index to PRIMARY!';
$strCantUseRecodeIconv = 'Can not use iconv nor libiconv nor recode_string function while extension reports to be loaded. Check your php configuration.';
$strCardinality = 'Cardinality';
$strCarriage = 'Carriage return: \\r';
$strChange = 'Change';
$strChangeDisplay = 'Choose Field to display';
$strChangePassword = 'Change password';
$strCharsetOfFile = 'Character set of the file:';
$strCheckAll = 'Check All';
$strCheckDbPriv = 'Check Database Privileges';
$strCheckTable = 'Check table';
$strChoosePage = 'Please choose a Page to edit';
$strColComFeat = 'Displaying Column Comments';
$strColumn = 'Column';
$strColumnNames = 'Column names';
$strComments = 'Comments';
$strCompleteInserts = 'Complete inserts';
$strCompression = 'Compression';
$strConfigFileError = 'phpMyAdmin was unable to read your configuration file!<br />This might happen if php finds a parse error in it or php cannot find the file.<br />Please call the configuration file directly using the link below and read the php error message(s) that you recieve. In most cases a quote or a semicolon is missing somewhere.<br />If you recieve a blank page, everything is fine.';
$strConfigureTableCoord = 'Please configure the coordinates for table %s';
$strConfirm = 'Do you really want to do it?';
$strCookiesRequired = 'Cookies must be enabled past this point.';
$strCopyTable = 'Copy table to (database<b>.</b>table):';
$strCopyTableOK = 'Table %s has been copied to %s.';
$strCreate = 'Create';
$strCreateIndex = 'Create an index on&nbsp;%s&nbsp;columns';
$strCreateIndexTopic = 'Create a new index';
$strCreateNewDatabase = 'Create new database';
$strCreateNewTable = 'Create new table on database %s';
$strCreatePage = 'Create a new Page';
$strCreatePdfFeat = 'Creation of PDFs';
$strCriteria = 'Criteria';

$strData = 'Data';
$strDataDict = 'Data Dictionary';
$strDataOnly = 'Data only';
$strDatabase = 'Database ';
$strDatabaseHasBeenDropped = 'Database %s has been dropped.';
$strDatabaseWildcard = 'Database (wildcards allowed):';
$strDatabases = 'databases';
$strDatabasesStats = 'Databases statistics';
$strDefault = 'Default';
$strDelete = 'Delete';
$strDeleteFailed = 'Deleted Failed!';
$strDeleteUserMessage = 'You have deleted the user %s.';
$strDeleted = 'The row has been deleted';
$strDeletedRows = 'Deleted rows:';
$strDescending = 'Descending';
$strDisabled = 'Disabled';
$strDisplay = 'Display';
$strDisplayFeat = 'Display Features';
$strDisplayOrder = 'Display order:';
$strDisplayPDF = 'Display PDF schema';
$strDoAQuery = 'Do a "query by example" (wildcard: "%")';
$strDoYouReally = 'Do you really want to ';
$strDocu = 'Documentation';
$strDrop = 'Drop';
$strDropDB = 'Drop database %s';
$strDropTable = 'Drop table';
$strDumpXRows = 'Dump %s row(s) starting at record # %s.';
$strDumpingData = 'Dumping data for table';
$strDynamic = 'dynamic';

$strEdit = 'Edit';
$strEditPDFPages = 'Edit PDF Pages';
$strEditPrivileges = 'Edit Privileges';
$strEffective = 'Effective';
$strEmpty = 'Empty';
$strEmptyResultSet = 'MySQL returned an empty result set (i.e. zero rows).';
$strEnabled = 'Enabled';
$strEnd = 'End';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglishPrivileges = ' Note: MySQL privilege names are expressed in English ';
$strError = 'Error';
$strExplain = 'Explain SQL';
$strExport = 'Export';
$strExportToXML = 'Export to XML format';
$strExtendedInserts = 'Extended inserts';
$strExtra = 'Extra';

$strField = 'Field';
$strFieldHasBeenDropped = 'Field %s has been dropped';
$strFields = 'Fields';
$strFieldsEmpty = ' The field count is empty! ';
$strFieldsEnclosedBy = 'Fields enclosed by';
$strFieldsEscapedBy = 'Fields escaped by';
$strFieldsTerminatedBy = 'Fields terminated by';
$strFixed = 'fixed';
$strFlushTable = 'Flush the table ("FLUSH")';
$strFormEmpty = 'Missing value in the form !';
$strFormat = 'Format';
$strFullText = 'Full Texts';
$strFunction = 'Function';

$strGenBy = 'Generated by';
$strGenTime = 'Generation Time';
$strGeneralRelationFeat = 'General relation features';
$strGo = 'Go';
$strGrants = 'Grants';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'has been altered.';
$strHasBeenCreated = 'has been created.';
$strHaveToShow = 'You have to choose at least one Column to display';
$strHome = 'Home';
$strHomepageOfficial = 'Official phpMyAdmin Homepage';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page';
$strHost = 'Host';
$strHostEmpty = 'The host name is empty!';

$strIdxFulltext = 'Fulltext';
$strIfYouWish = 'If you wish to load only some of a table\'s columns, specify a comma separated field list.';
$strIgnore = 'Ignore';
$strImportDocSQL = 'Import docSQL Files';
$strInUse = 'in use';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s has been dropped';
$strIndexName = 'Index name&nbsp;:';
$strIndexType = 'Index type&nbsp;:';
$strIndexes = 'Indexes';
$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';
$strInsert = 'Insert';
$strInsertAsNewRow = 'Insert as a new row';
$strInsertNewRow = 'Insert new row';
$strInsertTextfiles = 'Insert data from a textfile into table';
$strInsertedRows = 'Inserted rows:';
$strInstructions = 'Instructions';
$strInvalidName = '"%s" is a reserved word, you can\'t use it as a database/table/field name.';

$strKeepPass = 'Do not change the password';
$strKeyname = 'Keyname';
$strKill = 'Kill';

$strLength = 'Length';
$strLengthSet = 'Length/Values*';
$strLimitNumRows = 'Number of rows per page';
$strLineFeed = 'Linefeed: \\n';
$strLines = 'Lines';
$strLinesTerminatedBy = 'Lines terminated by';
$strLinkNotFound = 'Link not found';
$strLinksTo = 'Links to';
$strLocationTextfile = 'Location of the textfile';
$strLogPassword = 'Password:';
$strLogUsername = 'Username:';
$strLogin = 'Login';
$strLogout = 'Log out';

$strMissingBracket = 'Missing Bracket';
$strModifications = 'Modifications have been saved';
$strModify = 'Modify';
$strModifyIndexTopic = 'Modify an index';
$strMoveTable = 'Move table to (database<b>.</b>table):';
$strMoveTableOK = 'Table %s has been moved to %s.';
$strMySQLCharset = 'MySQL charset';
$strMySQLReloaded = 'MySQL reloaded.';
$strMySQLSaid = 'MySQL said: ';
$strMySQLServerProcess = 'MySQL %pma_s1% running on %pma_s2% as %pma_s3%';
$strMySQLShowProcess = 'Show processes';
$strMySQLShowStatus = 'Show MySQL runtime information';
$strMySQLShowVars = 'Show MySQL system variables';

$strName = 'Name';
$strNext = 'Next';
$strNo = 'No';
$strNoDatabases = 'No databases';
$strNoDescription = 'no Description';
$strNoDropDatabases = '"DROP DATABASE" statements are disabled.';
$strNoExplain = 'Skip Explain SQL';
$strNoFrames = 'phpMyAdmin is more friendly with a <b>frames-capable</b> browser.';
$strNoIndex = 'No index defined!';
$strNoIndexPartsDefined = 'No index parts defined!';
$strNoModification = 'No change';
$strNoPassword = 'No Password';
$strNoPhp = 'Without PHP Code';
$strNoPrivileges = 'No Privileges';
$strNoQuery = 'No SQL query!';
$strNoRights = 'You don\'t have enough rights to be here right now!';
$strNoTablesFound = 'No tables found in database.';
$strNoUsersFound = 'No user(s) found.';
$strNoValidateSQL = 'Skip Validate SQL';
$strNone = 'None';
$strNotNumber = 'This is not a number!';
$strNotOK = 'not OK';
$strNotSet = '<b>%s</b> table not found or not set in %s';
$strNotValidNumber = ' is not a valid row number!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s match(es) inside table <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> match(es)';
$strNumTables = 'Tables';

$strOK = 'OK';
$strOftenQuotation = 'Often quotation marks. OPTIONALLY means that only char and varchar fields are enclosed by the "enclosed by"-character.';
$strOperations = 'Operations';
$strOptimizeTable = 'Optimize table';
$strOptionalControls = 'Optional. Controls how to write or read special characters.';
$strOptionally = 'OPTIONALLY';
$strOptions = 'Options';
$strOr = 'Or';
$strOverhead = 'Overhead';

$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';
$strPHPVersion = 'PHP Version';
$strPageNumber = 'Page number:';
$strPartialText = 'Partial Texts';
$strPassword = 'Password';
$strPasswordEmpty = 'The password is empty!';
$strPasswordNotSame = 'The passwords aren\'t the same!';
$strPdfDbSchema = 'Schema of the the "%s" database - Page %s';
$strPdfInvalidPageNum = 'Undefined PDF page number!';
$strPdfInvalidTblName = 'The "%s" table doesn\'t exist!';
$strPdfNoTables = 'No tables';
$strPhp = 'Create PHP Code';
$strPmaDocumentation = 'phpMyAdmin documentation';
$strPmaUriError = 'The <tt>$cfg[\'PmaAbsoluteUri\']</tt> directive MUST be set in your configuration file!';
$strPos1 = 'Begin';
$strPrevious = 'Previous';
$strPrimary = 'Primary';
$strPrimaryKey = 'Primary key';
$strPrimaryKeyHasBeenDropped = 'The primary key has been dropped';
$strPrimaryKeyName = 'The name of the primary key must be... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>must</b> be the name of and <b>only of</b> a primary key!)';
$strPrint = 'Print';
$strPrintView = 'Print view';
$strPrivileges = 'Privileges';
$strProperties = 'Properties';
$strPutColNames = 'Put fields names at first row';

$strQBE = 'Query';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'SQL-query on database <b>%s</b>:';

$strReType = 'Re-type';
$strRecords = 'Records';
$strReferentialIntegrity = 'Check referential integrity:';
$strRelationNotWorking = 'The additional Features for working with linked Tables have been deactivated. To find out why click %shere%s.';
$strRelationView = 'Relation view';
$strRelationalSchema = 'Relational schema';
$strReloadFailed = 'MySQL reload failed.';
$strReloadMySQL = 'Reload MySQL';
$strRememberReload = 'Remember reload the server.';
$strRenameTable = 'Rename table to';
$strRenameTableOK = 'Table %s has been renamed to %s';
$strRepairTable = 'Repair table';
$strReplace = 'Replace';
$strReplaceTable = 'Replace table data with file';
$strReset = 'Reset';
$strRevoke = 'Revoke';
$strRevokeGrant = 'Revoke Grant';
$strRevokeGrantMessage = 'You have revoked the Grant privilege for %s';
$strRevokeMessage = 'You have revoked the privileges for %s';
$strRevokePriv = 'Revoke Privileges';
$strRowLength = 'Row length';
$strRowSize = ' Row size ';
$strRows = 'Rows';
$strRowsFrom = 'row(s) starting from record #';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions = 'in %s mode and repeat headers after %s cells';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Row Statistic';
$strRunQuery = 'Submit Query';
$strRunSQLQuery = 'Run SQL query/queries on database %s';
$strRunning = 'running on %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';
$strSQLQuery = 'SQL-query';
$strSQLResult = 'SQL result';
$strSQPBugInvalidIdentifer = 'Invalid Identifer';
$strSQPBugUnclosedQuote = 'Unclosed quote';
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';
$strSave = 'Save';
$strScaleFactorSmall = 'The scale factor is too small to fit the schema on one page';
$strSearch = 'Search';
$strSearchFormTitle = 'Search in database';
$strSearchInTables = 'Inside table(s):';
$strSearchNeedle = 'Word(s) or value(s) to search for (wildcard: "%"):';
$strSearchOption1 = 'at least one of the words';
$strSearchOption2 = 'all words';
$strSearchOption3 = 'the exact phrase';
$strSearchOption4 = 'as regular expression';
$strSearchResultsFor = 'Search results for "<i>%s</i>" %s:';
$strSearchType = 'Find:';
$strSelect = 'Select';
$strSelectADb = 'Please select a database';
$strSelectAll = 'Select All';
$strSelectFields = 'Select fields (at least one):';
$strSelectNumRows = 'in query';
$strSelectTables = 'Select Tables';
$strSend = 'Save as file';
$strServer = 'Server %s';
$strServerChoice = 'Server Choice';
$strServerVersion = 'Server version';
$strSetEnumVal = 'If field type is "enum" or "set", please enter the values using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Show';
$strShowAll = 'Show all';
$strShowColor = 'Show color';
$strShowCols = 'Show columns';
$strShowGrid = 'Show grid';
$strShowPHPInfo = 'Show PHP information';
$strShowTableDimension = 'Show dimension of tables';
$strShowTables = 'Show tables';
$strShowThisQuery = ' Show this query here again ';
$strShowingRecords = 'Showing rows';
$strSingly = '(singly)';
$strSize = 'Size';
$strSort = 'Sort';
$strSpaceUsage = 'Space usage';
$strSplitWordsWithSpace = 'Words are separated by a space character (" ").';
$strStatement = 'Statements';
$strStrucCSV = 'CSV data';
$strStrucData = 'Structure and data';
$strStrucDrop = 'Add \'drop table\'';
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strStrucOnly = 'Structure only';
$strStructPropose = 'Propose table structure';
$strStructure = 'Structure';
$strSubmit = 'Submit';
$strSuccess = 'Your SQL-query has been executed successfully';
$strSum = 'Sum';

$strTable = 'Table';
$strTableComments = 'Table comments';
$strTableEmpty = 'The table name is empty!';
$strTableHasBeenDropped = 'Table %s has been dropped';
$strTableHasBeenEmptied = 'Table %s has been emptied';
$strTableHasBeenFlushed = 'Table %s has been flushed';
$strTableMaintenance = 'Table maintenance';
$strTableOfContents = 'Table of contents';
$strTableStructure = 'Table structure for table';
$strTableType = 'Table type';
$strTables = '%s table(s)';
$strTextAreaLength = ' Because of its length,<br /> this field might not be editable ';
$strTheContent = 'The content of your file has been inserted.';
$strTheContents = 'The contents of the file replaces the contents of the selected table for rows with identical primary or unique key.';
$strTheTerminator = 'The terminator of the fields.';
$strTotal = 'total';
$strTotalUC = 'Total';
$strType = 'Type';

$strUncheckAll = 'Uncheck All';
$strUnique = 'Unique';
$strUnselectAll = 'Unselect All';
$strUpdatePrivMessage = 'You have updated the privileges for %s.';
$strUpdateProfile = 'Update profile:';
$strUpdateProfileMessage = 'The profile has been updated.';
$strUpdateQuery = 'Update Query';
$strUsage = 'Usage';
$strUseBackquotes = 'Enclose table and field names with backquotes';
$strUseTables = 'Use Tables';
$strUser = 'User';
$strUserEmpty = 'The user name is empty!';
$strUserName = 'User name';
$strUsers = 'Users';

$strValidateSQL = 'Validate SQL';
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.';
$strValue = 'Value';
$strViewDump = 'View dump (schema) of table';
$strViewDumpDB = 'View dump (schema) of database';

$strWebServerUploadDirectory = 'web-server upload directory';
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';
$strWelcome = 'Welcome to %s';
$strWithChecked = 'With selected:';
$strWrongUser = 'Wrong username/password. Access denied.';

$strYes = 'Yes';

$strZip = '"zipped"';

$strShowDatadictAs = 'Data Dictionary Format';  //to translate
$strLandscape = 'Landscape';  //to translate
$strPortrait = 'Portrait';  //to translate

$timespanfmt = '%s days, %s hours, %s minutes and %s seconds'; //to translate

$strAbortedClients = 'Aborted'; //to translate
$strConnections = 'Connections'; //to translate
$strFailedAttempts = 'Failed attempts'; //to translate
$strGlobalValue = 'Global value'; //to translate
$strMoreStatusVars = 'More status variables'; //to translate
$strPerHour = 'per hour'; //to translate
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';
$strQueryType = 'Query type'; //to translate
$strReceived = 'Received'; //to translate
$strSent = 'Sent'; //to translate
$strServerStatus = 'Runtime Information'; //to translate
$strServerStatusUptime = 'This MySQL server has been running for %s. It started up on %s.'; //to translate
$strServerTabStatus = 'Status'; //to translate
$strServerTabVariables = 'Variables'; //to translate
$strServerTabProcesslist = 'Processes'; //to translate
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVars = 'Server variables and settings'; //to translate
$strSessionValue = 'Session value'; //to translate
$strTraffic = 'Traffic'; //to translate
$strVar = 'Variable'; //to translate
?>

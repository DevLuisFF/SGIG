<?php




$tdataperiodos = array();
$tdataperiodos[".searchableFields"] = array();
	$tdataperiodos[".truncateText"] = true;
	$tdataperiodos[".NumberOfChars"] = 80;
	$tdataperiodos[".ShortName"] = "periodos";
	$tdataperiodos[".OwnerID"] = "";
	$tdataperiodos[".OriginalTable"] = "periodos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataperiodos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataperiodos[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsperiodos = array();
$fieldToolTipsperiodos = array();
$pageTitlesperiodos = array();
$placeHoldersperiodos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsperiodos["Spanish"] = array();
	$fieldToolTipsperiodos["Spanish"] = array();
	$placeHoldersperiodos["Spanish"] = array();
	$pageTitlesperiodos["Spanish"] = array();
	$fieldLabelsperiodos["Spanish"]["id"] = "Id";
	$fieldToolTipsperiodos["Spanish"]["id"] = "";
	$placeHoldersperiodos["Spanish"]["id"] = "";
	$fieldLabelsperiodos["Spanish"]["mes"] = "Mes";
	$fieldToolTipsperiodos["Spanish"]["mes"] = "";
	$placeHoldersperiodos["Spanish"]["mes"] = "";
	$fieldLabelsperiodos["Spanish"]["anio"] = "Anio";
	$fieldToolTipsperiodos["Spanish"]["anio"] = "";
	$placeHoldersperiodos["Spanish"]["anio"] = "";
	if (count($fieldToolTipsperiodos["Spanish"]))
		$tdataperiodos[".isUseToolTips"] = true;
}


	$tdataperiodos[".NCSearch"] = true;



$tdataperiodos[".shortTableName"] = "periodos";
$tdataperiodos[".nSecOptions"] = 0;

$tdataperiodos[".mainTableOwnerID"] = "";
$tdataperiodos[".entityType"] = 0;

$tdataperiodos[".strOriginalTableName"] = "periodos";

	



$tdataperiodos[".showAddInPopup"] = false;

$tdataperiodos[".showEditInPopup"] = false;

$tdataperiodos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataperiodos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataperiodos[".listAjax"] = false;
//	temporary
$tdataperiodos[".listAjax"] = false;

	$tdataperiodos[".audit"] = false;

	$tdataperiodos[".locking"] = false;


$pages = $tdataperiodos[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataperiodos[".edit"] = true;
	$tdataperiodos[".afterEditAction"] = 1;
	$tdataperiodos[".closePopupAfterEdit"] = 1;
	$tdataperiodos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataperiodos[".add"] = true;
$tdataperiodos[".afterAddAction"] = 1;
$tdataperiodos[".closePopupAfterAdd"] = 1;
$tdataperiodos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataperiodos[".list"] = true;
}



$tdataperiodos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataperiodos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataperiodos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataperiodos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataperiodos[".printFriendly"] = true;
}



$tdataperiodos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataperiodos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataperiodos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataperiodos[".isUseAjaxSuggest"] = true;

$tdataperiodos[".rowHighlite"] = true;




$tdataperiodos[".flexibleSearch"] = true;


$tdataperiodos[".ajaxCodeSnippetAdded"] = false;

$tdataperiodos[".buttonsAdded"] = false;

$tdataperiodos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataperiodos[".isUseTimeForSearch"] = false;


$tdataperiodos[".badgeColor"] = "2F4F4F";


$tdataperiodos[".allSearchFields"] = array();
$tdataperiodos[".filterFields"] = array();
$tdataperiodos[".requiredSearchFields"] = array();

$tdataperiodos[".googleLikeFields"] = array();
$tdataperiodos[".googleLikeFields"][] = "id";
$tdataperiodos[".googleLikeFields"][] = "mes";
$tdataperiodos[".googleLikeFields"][] = "anio";



$tdataperiodos[".tableType"] = "list";

$tdataperiodos[".printerPageOrientation"] = 0;
$tdataperiodos[".nPrinterPageScale"] = 100;

$tdataperiodos[".nPrinterSplitRecords"] = 40;

$tdataperiodos[".nPrinterPDFSplitRecords"] = 40;


$tdataperiodos[".geocodingEnabled"] = false;










$tdataperiodos[".pageSize"] = 20;

$tdataperiodos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataperiodos[".strOrderBy"] = $tstrOrderBy;

$tdataperiodos[".orderindexes"] = array();

$tdataperiodos[".sqlHead"] = "SELECT id,  	mes,  	anio";
$tdataperiodos[".sqlFrom"] = "FROM periodos";
$tdataperiodos[".sqlWhereExpr"] = "";
$tdataperiodos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataperiodos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataperiodos[".arrGroupsPerPage"] = $arrGPP;

$tdataperiodos[".highlightSearchResults"] = true;

$tableKeysperiodos = array();
$tableKeysperiodos[] = "id";
$tdataperiodos[".Keys"] = $tableKeysperiodos;


$tdataperiodos[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "periodos";
	$fdata["Label"] = GetFieldLabel("periodos","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataperiodos["id"] = $fdata;
		$tdataperiodos[".searchableFields"][] = "id";
//	mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mes";
	$fdata["GoodName"] = "mes";
	$fdata["ownerTable"] = "periodos";
	$fdata["Label"] = GetFieldLabel("periodos","mes");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "mes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataperiodos["mes"] = $fdata;
		$tdataperiodos[".searchableFields"][] = "mes";
//	anio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "anio";
	$fdata["GoodName"] = "anio";
	$fdata["ownerTable"] = "periodos";
	$fdata["Label"] = GetFieldLabel("periodos","anio");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "anio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataperiodos["anio"] = $fdata;
		$tdataperiodos[".searchableFields"][] = "anio";


$tables_data["periodos"]=&$tdataperiodos;
$field_labels["periodos"] = &$fieldLabelsperiodos;
$fieldToolTips["periodos"] = &$fieldToolTipsperiodos;
$placeHolders["periodos"] = &$placeHoldersperiodos;
$page_titles["periodos"] = &$pageTitlesperiodos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["periodos"] = array();
//	transacciones
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="transacciones";
		$detailsParam["dOriginalTable"] = "transacciones";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "transacciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("transacciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["periodos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["periodos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["periodos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["periodos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["periodos"][$dIndex]["detailKeys"][]="periodo_id";

// tables which are master tables for current table (detail)
$masterTablesData["periodos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_periodos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	mes,  	anio";
$proto0["m_strFrom"] = "FROM periodos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "periodos",
	"m_srcTableName" => "periodos"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "periodos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "periodos",
	"m_srcTableName" => "periodos"
));

$proto8["m_sql"] = "mes";
$proto8["m_srcTableName"] = "periodos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "anio",
	"m_strTable" => "periodos",
	"m_srcTableName" => "periodos"
));

$proto10["m_sql"] = "anio";
$proto10["m_srcTableName"] = "periodos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "periodos";
$proto13["m_srcTableName"] = "periodos";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "mes";
$proto13["m_columns"][] = "anio";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "periodos";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "periodos";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="periodos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_periodos = createSqlQuery_periodos();


	
		;

			

$tdataperiodos[".sqlquery"] = $queryData_periodos;

$tableEvents["periodos"] = new eventsBase;
$tdataperiodos[".hasEvents"] = false;

?>
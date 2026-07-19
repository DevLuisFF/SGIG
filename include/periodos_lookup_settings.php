<?php




$tdataperiodos_lookup = array();
$tdataperiodos_lookup[".searchableFields"] = array();
	$tdataperiodos_lookup[".truncateText"] = true;
	$tdataperiodos_lookup[".NumberOfChars"] = 80;
	$tdataperiodos_lookup[".ShortName"] = "periodos_lookup";
	$tdataperiodos_lookup[".OwnerID"] = "";
	$tdataperiodos_lookup[".OriginalTable"] = "periodos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataperiodos_lookup[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataperiodos_lookup[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsperiodos_lookup = array();
$fieldToolTipsperiodos_lookup = array();
$pageTitlesperiodos_lookup = array();
$placeHoldersperiodos_lookup = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsperiodos_lookup["Spanish"] = array();
	$fieldToolTipsperiodos_lookup["Spanish"] = array();
	$placeHoldersperiodos_lookup["Spanish"] = array();
	$pageTitlesperiodos_lookup["Spanish"] = array();
	$fieldLabelsperiodos_lookup["Spanish"]["id"] = "Id";
	$fieldToolTipsperiodos_lookup["Spanish"]["id"] = "";
	$placeHoldersperiodos_lookup["Spanish"]["id"] = "";
	$fieldLabelsperiodos_lookup["Spanish"]["display_name"] = "Display Name";
	$fieldToolTipsperiodos_lookup["Spanish"]["display_name"] = "";
	$placeHoldersperiodos_lookup["Spanish"]["display_name"] = "";
	if (count($fieldToolTipsperiodos_lookup["Spanish"]))
		$tdataperiodos_lookup[".isUseToolTips"] = true;
}


	$tdataperiodos_lookup[".NCSearch"] = true;



$tdataperiodos_lookup[".shortTableName"] = "periodos_lookup";
$tdataperiodos_lookup[".nSecOptions"] = 0;

$tdataperiodos_lookup[".mainTableOwnerID"] = "";
$tdataperiodos_lookup[".entityType"] = 1;

$tdataperiodos_lookup[".strOriginalTableName"] = "periodos";

	



$tdataperiodos_lookup[".showAddInPopup"] = false;

$tdataperiodos_lookup[".showEditInPopup"] = false;

$tdataperiodos_lookup[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataperiodos_lookup[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataperiodos_lookup[".listAjax"] = false;
//	temporary
$tdataperiodos_lookup[".listAjax"] = false;

	$tdataperiodos_lookup[".audit"] = false;

	$tdataperiodos_lookup[".locking"] = false;


$pages = $tdataperiodos_lookup[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataperiodos_lookup[".edit"] = true;
	$tdataperiodos_lookup[".afterEditAction"] = 1;
	$tdataperiodos_lookup[".closePopupAfterEdit"] = 1;
	$tdataperiodos_lookup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataperiodos_lookup[".add"] = true;
$tdataperiodos_lookup[".afterAddAction"] = 1;
$tdataperiodos_lookup[".closePopupAfterAdd"] = 1;
$tdataperiodos_lookup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataperiodos_lookup[".list"] = true;
}



$tdataperiodos_lookup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataperiodos_lookup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataperiodos_lookup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataperiodos_lookup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataperiodos_lookup[".printFriendly"] = true;
}



$tdataperiodos_lookup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataperiodos_lookup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataperiodos_lookup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataperiodos_lookup[".isUseAjaxSuggest"] = true;

$tdataperiodos_lookup[".rowHighlite"] = true;




$tdataperiodos_lookup[".flexibleSearch"] = true;


$tdataperiodos_lookup[".ajaxCodeSnippetAdded"] = false;

$tdataperiodos_lookup[".buttonsAdded"] = false;

$tdataperiodos_lookup[".addPageEvents"] = false;

// use timepicker for search panel
$tdataperiodos_lookup[".isUseTimeForSearch"] = false;


$tdataperiodos_lookup[".badgeColor"] = "6493EA";


$tdataperiodos_lookup[".allSearchFields"] = array();
$tdataperiodos_lookup[".filterFields"] = array();
$tdataperiodos_lookup[".requiredSearchFields"] = array();

$tdataperiodos_lookup[".googleLikeFields"] = array();
$tdataperiodos_lookup[".googleLikeFields"][] = "id";
$tdataperiodos_lookup[".googleLikeFields"][] = "display_name";



$tdataperiodos_lookup[".tableType"] = "list";

$tdataperiodos_lookup[".printerPageOrientation"] = 0;
$tdataperiodos_lookup[".nPrinterPageScale"] = 100;

$tdataperiodos_lookup[".nPrinterSplitRecords"] = 40;

$tdataperiodos_lookup[".nPrinterPDFSplitRecords"] = 40;


$tdataperiodos_lookup[".geocodingEnabled"] = false;










$tdataperiodos_lookup[".pageSize"] = 20;

$tdataperiodos_lookup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataperiodos_lookup[".strOrderBy"] = $tstrOrderBy;

$tdataperiodos_lookup[".orderindexes"] = array();

$tdataperiodos_lookup[".sqlHead"] = " ";
$tdataperiodos_lookup[".sqlFrom"] = "";
$tdataperiodos_lookup[".sqlWhereExpr"] = "";
$tdataperiodos_lookup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataperiodos_lookup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataperiodos_lookup[".arrGroupsPerPage"] = $arrGPP;

$tdataperiodos_lookup[".highlightSearchResults"] = true;

$tableKeysperiodos_lookup = array();
$tableKeysperiodos_lookup[] = "id";
$tdataperiodos_lookup[".Keys"] = $tableKeysperiodos_lookup;


$tdataperiodos_lookup[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("periodos_lookup","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

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


	$tdataperiodos_lookup["id"] = $fdata;
		$tdataperiodos_lookup[".searchableFields"][] = "id";
//	display_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "display_name";
	$fdata["GoodName"] = "display_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("periodos_lookup","display_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "display_name";

		$fdata["FullName"] = "display_name";

	
	
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


	$tdataperiodos_lookup["display_name"] = $fdata;
		$tdataperiodos_lookup[".searchableFields"][] = "display_name";


$tables_data["periodos_lookup"]=&$tdataperiodos_lookup;
$field_labels["periodos_lookup"] = &$fieldLabelsperiodos_lookup;
$fieldToolTips["periodos_lookup"] = &$fieldToolTipsperiodos_lookup;
$placeHolders["periodos_lookup"] = &$placeHoldersperiodos_lookup;
$page_titles["periodos_lookup"] = &$pageTitlesperiodos_lookup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["periodos_lookup"] = array();
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


		
	$detailsTablesData["periodos_lookup"][$dIndex] = $detailsParam;

	
		$detailsTablesData["periodos_lookup"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["periodos_lookup"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["periodos_lookup"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["periodos_lookup"][$dIndex]["detailKeys"][]="periodo_id";

// tables which are master tables for current table (detail)
$masterTablesData["periodos_lookup"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_periodos_lookup()
{
$proto0=array();
$proto0["m_strHead"] = "";
$proto0["m_strFieldList"] = "";
$proto0["m_strFrom"] = "";
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
$proto0["m_fromlist"] = array();
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="periodos_lookup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_periodos_lookup = createSqlQuery_periodos_lookup();


	
		;

		

$tdataperiodos_lookup[".sqlquery"] = $queryData_periodos_lookup;

$tableEvents["periodos_lookup"] = new eventsBase;
$tdataperiodos_lookup[".hasEvents"] = false;

?>
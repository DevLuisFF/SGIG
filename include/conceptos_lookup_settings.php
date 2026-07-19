<?php




$tdataconceptos_lookup = array();
$tdataconceptos_lookup[".searchableFields"] = array();
	$tdataconceptos_lookup[".truncateText"] = true;
	$tdataconceptos_lookup[".NumberOfChars"] = 80;
	$tdataconceptos_lookup[".ShortName"] = "conceptos_lookup";
	$tdataconceptos_lookup[".OwnerID"] = "";
	$tdataconceptos_lookup[".OriginalTable"] = "conceptos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataconceptos_lookup[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataconceptos_lookup[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsconceptos_lookup = array();
$fieldToolTipsconceptos_lookup = array();
$pageTitlesconceptos_lookup = array();
$placeHoldersconceptos_lookup = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconceptos_lookup["Spanish"] = array();
	$fieldToolTipsconceptos_lookup["Spanish"] = array();
	$placeHoldersconceptos_lookup["Spanish"] = array();
	$pageTitlesconceptos_lookup["Spanish"] = array();
	$fieldLabelsconceptos_lookup["Spanish"]["id"] = "Id";
	$fieldToolTipsconceptos_lookup["Spanish"]["id"] = "";
	$placeHoldersconceptos_lookup["Spanish"]["id"] = "";
	$fieldLabelsconceptos_lookup["Spanish"]["display_name"] = "Display Name";
	$fieldToolTipsconceptos_lookup["Spanish"]["display_name"] = "";
	$placeHoldersconceptos_lookup["Spanish"]["display_name"] = "";
	if (count($fieldToolTipsconceptos_lookup["Spanish"]))
		$tdataconceptos_lookup[".isUseToolTips"] = true;
}


	$tdataconceptos_lookup[".NCSearch"] = true;



$tdataconceptos_lookup[".shortTableName"] = "conceptos_lookup";
$tdataconceptos_lookup[".nSecOptions"] = 0;

$tdataconceptos_lookup[".mainTableOwnerID"] = "";
$tdataconceptos_lookup[".entityType"] = 1;

$tdataconceptos_lookup[".strOriginalTableName"] = "conceptos";

	



$tdataconceptos_lookup[".showAddInPopup"] = false;

$tdataconceptos_lookup[".showEditInPopup"] = false;

$tdataconceptos_lookup[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataconceptos_lookup[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataconceptos_lookup[".listAjax"] = false;
//	temporary
$tdataconceptos_lookup[".listAjax"] = false;

	$tdataconceptos_lookup[".audit"] = false;

	$tdataconceptos_lookup[".locking"] = false;


$pages = $tdataconceptos_lookup[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconceptos_lookup[".edit"] = true;
	$tdataconceptos_lookup[".afterEditAction"] = 1;
	$tdataconceptos_lookup[".closePopupAfterEdit"] = 1;
	$tdataconceptos_lookup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconceptos_lookup[".add"] = true;
$tdataconceptos_lookup[".afterAddAction"] = 1;
$tdataconceptos_lookup[".closePopupAfterAdd"] = 1;
$tdataconceptos_lookup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconceptos_lookup[".list"] = true;
}



$tdataconceptos_lookup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconceptos_lookup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconceptos_lookup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconceptos_lookup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconceptos_lookup[".printFriendly"] = true;
}



$tdataconceptos_lookup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconceptos_lookup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconceptos_lookup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconceptos_lookup[".isUseAjaxSuggest"] = true;

$tdataconceptos_lookup[".rowHighlite"] = true;




$tdataconceptos_lookup[".flexibleSearch"] = true;


$tdataconceptos_lookup[".ajaxCodeSnippetAdded"] = false;

$tdataconceptos_lookup[".buttonsAdded"] = false;

$tdataconceptos_lookup[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconceptos_lookup[".isUseTimeForSearch"] = false;


$tdataconceptos_lookup[".badgeColor"] = "E8926F";


$tdataconceptos_lookup[".allSearchFields"] = array();
$tdataconceptos_lookup[".filterFields"] = array();
$tdataconceptos_lookup[".requiredSearchFields"] = array();

$tdataconceptos_lookup[".googleLikeFields"] = array();
$tdataconceptos_lookup[".googleLikeFields"][] = "id";
$tdataconceptos_lookup[".googleLikeFields"][] = "display_name";



$tdataconceptos_lookup[".tableType"] = "list";

$tdataconceptos_lookup[".printerPageOrientation"] = 0;
$tdataconceptos_lookup[".nPrinterPageScale"] = 100;

$tdataconceptos_lookup[".nPrinterSplitRecords"] = 40;

$tdataconceptos_lookup[".nPrinterPDFSplitRecords"] = 40;


$tdataconceptos_lookup[".geocodingEnabled"] = false;










$tdataconceptos_lookup[".pageSize"] = 20;

$tdataconceptos_lookup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataconceptos_lookup[".strOrderBy"] = $tstrOrderBy;

$tdataconceptos_lookup[".orderindexes"] = array();

$tdataconceptos_lookup[".sqlHead"] = " ";
$tdataconceptos_lookup[".sqlFrom"] = "";
$tdataconceptos_lookup[".sqlWhereExpr"] = "";
$tdataconceptos_lookup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconceptos_lookup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconceptos_lookup[".arrGroupsPerPage"] = $arrGPP;

$tdataconceptos_lookup[".highlightSearchResults"] = true;

$tableKeysconceptos_lookup = array();
$tableKeysconceptos_lookup[] = "id";
$tdataconceptos_lookup[".Keys"] = $tableKeysconceptos_lookup;


$tdataconceptos_lookup[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("conceptos_lookup","id");
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


	$tdataconceptos_lookup["id"] = $fdata;
		$tdataconceptos_lookup[".searchableFields"][] = "id";
//	display_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "display_name";
	$fdata["GoodName"] = "display_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("conceptos_lookup","display_name");
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


	$tdataconceptos_lookup["display_name"] = $fdata;
		$tdataconceptos_lookup[".searchableFields"][] = "display_name";


$tables_data["conceptos_lookup"]=&$tdataconceptos_lookup;
$field_labels["conceptos_lookup"] = &$fieldLabelsconceptos_lookup;
$fieldToolTips["conceptos_lookup"] = &$fieldToolTipsconceptos_lookup;
$placeHolders["conceptos_lookup"] = &$placeHoldersconceptos_lookup;
$page_titles["conceptos_lookup"] = &$pageTitlesconceptos_lookup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["conceptos_lookup"] = array();
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


		
	$detailsTablesData["conceptos_lookup"][$dIndex] = $detailsParam;

	
		$detailsTablesData["conceptos_lookup"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["conceptos_lookup"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["conceptos_lookup"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["conceptos_lookup"][$dIndex]["detailKeys"][]="concepto_id";

// tables which are master tables for current table (detail)
$masterTablesData["conceptos_lookup"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_conceptos_lookup()
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
$proto0["m_srcTableName"]="conceptos_lookup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_conceptos_lookup = createSqlQuery_conceptos_lookup();


	
		;

		

$tdataconceptos_lookup[".sqlquery"] = $queryData_conceptos_lookup;

$tableEvents["conceptos_lookup"] = new eventsBase;
$tdataconceptos_lookup[".hasEvents"] = false;

?>
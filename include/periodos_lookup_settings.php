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
	$fieldLabelsperiodos_lookup["Spanish"]["label"] = "Label";
	$fieldToolTipsperiodos_lookup["Spanish"]["label"] = "";
	$placeHoldersperiodos_lookup["Spanish"]["label"] = "";
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
$tdataperiodos_lookup[".googleLikeFields"][] = "label";



$tdataperiodos_lookup[".tableType"] = "list";

$tdataperiodos_lookup[".printerPageOrientation"] = 0;
$tdataperiodos_lookup[".nPrinterPageScale"] = 100;

$tdataperiodos_lookup[".nPrinterSplitRecords"] = 40;

$tdataperiodos_lookup[".nPrinterPDFSplitRecords"] = 40;


$tdataperiodos_lookup[".geocodingEnabled"] = false;










$tdataperiodos_lookup[".pageSize"] = 20;

$tdataperiodos_lookup[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY anio DESC, mes DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataperiodos_lookup[".strOrderBy"] = $tstrOrderBy;

$tdataperiodos_lookup[".orderindexes"] = array();

$tdataperiodos_lookup[".sqlHead"] = "SELECT id,      CONCAT(          CASE mes              WHEN 1 THEN 'Enero'              WHEN 2 THEN 'Febrero'              WHEN 3 THEN 'Marzo'              WHEN 4 THEN 'Abril'              WHEN 5 THEN 'Mayo'              WHEN 6 THEN 'Junio'              WHEN 7 THEN 'Julio'              WHEN 8 THEN 'Agosto'              WHEN 9 THEN 'Septiembre'              WHEN 10 THEN 'Octubre'              WHEN 11 THEN 'Noviembre'              WHEN 12 THEN 'Diciembre'          END,          ' ',          anio      ) AS label";
$tdataperiodos_lookup[".sqlFrom"] = "FROM periodos";
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
	$fdata["ownerTable"] = "periodos";
	$fdata["Label"] = GetFieldLabel("periodos_lookup","id");
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


	$tdataperiodos_lookup["id"] = $fdata;
		$tdataperiodos_lookup[".searchableFields"][] = "id";
//	label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "label";
	$fdata["GoodName"] = "label";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("periodos_lookup","label");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "label";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(          CASE mes              WHEN 1 THEN 'Enero'              WHEN 2 THEN 'Febrero'              WHEN 3 THEN 'Marzo'              WHEN 4 THEN 'Abril'              WHEN 5 THEN 'Mayo'              WHEN 6 THEN 'Junio'              WHEN 7 THEN 'Julio'              WHEN 8 THEN 'Agosto'              WHEN 9 THEN 'Septiembre'              WHEN 10 THEN 'Octubre'              WHEN 11 THEN 'Noviembre'              WHEN 12 THEN 'Diciembre'          END,          ' ',          anio      )";

	
	
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


	$tdataperiodos_lookup["label"] = $fdata;
		$tdataperiodos_lookup[".searchableFields"][] = "label";


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
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,      CONCAT(          CASE mes              WHEN 1 THEN 'Enero'              WHEN 2 THEN 'Febrero'              WHEN 3 THEN 'Marzo'              WHEN 4 THEN 'Abril'              WHEN 5 THEN 'Mayo'              WHEN 6 THEN 'Junio'              WHEN 7 THEN 'Julio'              WHEN 8 THEN 'Agosto'              WHEN 9 THEN 'Septiembre'              WHEN 10 THEN 'Octubre'              WHEN 11 THEN 'Noviembre'              WHEN 12 THEN 'Diciembre'          END,          ' ',          anio      ) AS label";
$proto0["m_strFrom"] = "FROM periodos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY anio DESC, mes DESC";
	
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
	"m_srcTableName" => "periodos_lookup"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "periodos_lookup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "CASE mes              WHEN 1 THEN 'Enero'              WHEN 2 THEN 'Febrero'              WHEN 3 THEN 'Marzo'              WHEN 4 THEN 'Abril'              WHEN 5 THEN 'Mayo'              WHEN 6 THEN 'Junio'              WHEN 7 THEN 'Julio'              WHEN 8 THEN 'Agosto'              WHEN 9 THEN 'Septiembre'              WHEN 10 THEN 'Octubre'              WHEN 11 THEN 'Noviembre'              WHEN 12 THEN 'Diciembre'          END"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "anio"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "CONCAT(          CASE mes              WHEN 1 THEN 'Enero'              WHEN 2 THEN 'Febrero'              WHEN 3 THEN 'Marzo'              WHEN 4 THEN 'Abril'              WHEN 5 THEN 'Mayo'              WHEN 6 THEN 'Junio'              WHEN 7 THEN 'Julio'              WHEN 8 THEN 'Agosto'              WHEN 9 THEN 'Septiembre'              WHEN 10 THEN 'Octubre'              WHEN 11 THEN 'Noviembre'              WHEN 12 THEN 'Diciembre'          END,          ' ',          anio      )";
$proto8["m_srcTableName"] = "periodos_lookup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "label";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "periodos";
$proto14["m_srcTableName"] = "periodos_lookup";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "mes";
$proto14["m_columns"][] = "anio";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "periodos";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "periodos_lookup";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "anio",
	"m_strTable" => "periodos",
	"m_srcTableName" => "periodos_lookup"
));

$proto17["m_column"]=$obj;
$proto17["m_bAsc"] = 0;
$proto17["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto17);

$proto0["m_orderby"][]=$obj;					
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "periodos",
	"m_srcTableName" => "periodos_lookup"
));

$proto19["m_column"]=$obj;
$proto19["m_bAsc"] = 0;
$proto19["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto19);

$proto0["m_orderby"][]=$obj;					
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
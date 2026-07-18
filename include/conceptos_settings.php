<?php




$tdataconceptos = array();
$tdataconceptos[".searchableFields"] = array();
	$tdataconceptos[".truncateText"] = true;
	$tdataconceptos[".NumberOfChars"] = 80;
	$tdataconceptos[".ShortName"] = "conceptos";
	$tdataconceptos[".OwnerID"] = "";
	$tdataconceptos[".OriginalTable"] = "conceptos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataconceptos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataconceptos[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsconceptos = array();
$fieldToolTipsconceptos = array();
$pageTitlesconceptos = array();
$placeHoldersconceptos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconceptos["Spanish"] = array();
	$fieldToolTipsconceptos["Spanish"] = array();
	$placeHoldersconceptos["Spanish"] = array();
	$pageTitlesconceptos["Spanish"] = array();
	$fieldLabelsconceptos["Spanish"]["id"] = "Id";
	$fieldToolTipsconceptos["Spanish"]["id"] = "";
	$placeHoldersconceptos["Spanish"]["id"] = "";
	$fieldLabelsconceptos["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsconceptos["Spanish"]["nombre"] = "";
	$placeHoldersconceptos["Spanish"]["nombre"] = "";
	$fieldLabelsconceptos["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsconceptos["Spanish"]["descripcion"] = "";
	$placeHoldersconceptos["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsconceptos["Spanish"]))
		$tdataconceptos[".isUseToolTips"] = true;
}


	$tdataconceptos[".NCSearch"] = true;



$tdataconceptos[".shortTableName"] = "conceptos";
$tdataconceptos[".nSecOptions"] = 0;

$tdataconceptos[".mainTableOwnerID"] = "";
$tdataconceptos[".entityType"] = 0;

$tdataconceptos[".strOriginalTableName"] = "conceptos";

	



$tdataconceptos[".showAddInPopup"] = false;

$tdataconceptos[".showEditInPopup"] = false;

$tdataconceptos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataconceptos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataconceptos[".listAjax"] = false;
//	temporary
$tdataconceptos[".listAjax"] = false;

	$tdataconceptos[".audit"] = false;

	$tdataconceptos[".locking"] = false;


$pages = $tdataconceptos[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconceptos[".edit"] = true;
	$tdataconceptos[".afterEditAction"] = 1;
	$tdataconceptos[".closePopupAfterEdit"] = 1;
	$tdataconceptos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconceptos[".add"] = true;
$tdataconceptos[".afterAddAction"] = 1;
$tdataconceptos[".closePopupAfterAdd"] = 1;
$tdataconceptos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconceptos[".list"] = true;
}



$tdataconceptos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconceptos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconceptos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconceptos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconceptos[".printFriendly"] = true;
}



$tdataconceptos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconceptos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconceptos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconceptos[".isUseAjaxSuggest"] = true;

$tdataconceptos[".rowHighlite"] = true;




$tdataconceptos[".flexibleSearch"] = true;


$tdataconceptos[".ajaxCodeSnippetAdded"] = false;

$tdataconceptos[".buttonsAdded"] = false;

$tdataconceptos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconceptos[".isUseTimeForSearch"] = false;


$tdataconceptos[".badgeColor"] = "D2691E";


$tdataconceptos[".allSearchFields"] = array();
$tdataconceptos[".filterFields"] = array();
$tdataconceptos[".requiredSearchFields"] = array();

$tdataconceptos[".googleLikeFields"] = array();
$tdataconceptos[".googleLikeFields"][] = "id";
$tdataconceptos[".googleLikeFields"][] = "nombre";
$tdataconceptos[".googleLikeFields"][] = "descripcion";



$tdataconceptos[".tableType"] = "list";

$tdataconceptos[".printerPageOrientation"] = 0;
$tdataconceptos[".nPrinterPageScale"] = 100;

$tdataconceptos[".nPrinterSplitRecords"] = 40;

$tdataconceptos[".nPrinterPDFSplitRecords"] = 40;


$tdataconceptos[".geocodingEnabled"] = false;










$tdataconceptos[".pageSize"] = 20;

$tdataconceptos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataconceptos[".strOrderBy"] = $tstrOrderBy;

$tdataconceptos[".orderindexes"] = array();

$tdataconceptos[".sqlHead"] = "SELECT id,  	nombre,  	descripcion";
$tdataconceptos[".sqlFrom"] = "FROM conceptos";
$tdataconceptos[".sqlWhereExpr"] = "";
$tdataconceptos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconceptos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconceptos[".arrGroupsPerPage"] = $arrGPP;

$tdataconceptos[".highlightSearchResults"] = true;

$tableKeysconceptos = array();
$tableKeysconceptos[] = "id";
$tdataconceptos[".Keys"] = $tableKeysconceptos;


$tdataconceptos[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "conceptos";
	$fdata["Label"] = GetFieldLabel("conceptos","id");
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


	$tdataconceptos["id"] = $fdata;
		$tdataconceptos[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "conceptos";
	$fdata["Label"] = GetFieldLabel("conceptos","nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataconceptos["nombre"] = $fdata;
		$tdataconceptos[".searchableFields"][] = "nombre";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "conceptos";
	$fdata["Label"] = GetFieldLabel("conceptos","descripcion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "descripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataconceptos["descripcion"] = $fdata;
		$tdataconceptos[".searchableFields"][] = "descripcion";


$tables_data["conceptos"]=&$tdataconceptos;
$field_labels["conceptos"] = &$fieldLabelsconceptos;
$fieldToolTips["conceptos"] = &$fieldToolTipsconceptos;
$placeHolders["conceptos"] = &$placeHoldersconceptos;
$page_titles["conceptos"] = &$pageTitlesconceptos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["conceptos"] = array();
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


		
	$detailsTablesData["conceptos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["conceptos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["conceptos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["conceptos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["conceptos"][$dIndex]["detailKeys"][]="concepto_id";

// tables which are master tables for current table (detail)
$masterTablesData["conceptos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_conceptos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	descripcion";
$proto0["m_strFrom"] = "FROM conceptos";
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
	"m_strTable" => "conceptos",
	"m_srcTableName" => "conceptos"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "conceptos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "conceptos",
	"m_srcTableName" => "conceptos"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "conceptos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "conceptos",
	"m_srcTableName" => "conceptos"
));

$proto10["m_sql"] = "descripcion";
$proto10["m_srcTableName"] = "conceptos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "conceptos";
$proto13["m_srcTableName"] = "conceptos";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "nombre";
$proto13["m_columns"][] = "descripcion";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "conceptos";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "conceptos";
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
$proto0["m_srcTableName"]="conceptos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_conceptos = createSqlQuery_conceptos();


	
		;

			

$tdataconceptos[".sqlquery"] = $queryData_conceptos;

$tableEvents["conceptos"] = new eventsBase;
$tdataconceptos[".hasEvents"] = false;

?>
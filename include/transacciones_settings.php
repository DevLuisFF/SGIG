<?php




$tdatatransacciones = array();
$tdatatransacciones[".searchableFields"] = array();
	$tdatatransacciones[".truncateText"] = true;
	$tdatatransacciones[".NumberOfChars"] = 80;
	$tdatatransacciones[".ShortName"] = "transacciones";
	$tdatatransacciones[".OwnerID"] = "";
	$tdatatransacciones[".OriginalTable"] = "transacciones";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatransacciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatransacciones[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstransacciones = array();
$fieldToolTipstransacciones = array();
$pageTitlestransacciones = array();
$placeHolderstransacciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstransacciones["Spanish"] = array();
	$fieldToolTipstransacciones["Spanish"] = array();
	$placeHolderstransacciones["Spanish"] = array();
	$pageTitlestransacciones["Spanish"] = array();
	$fieldLabelstransacciones["Spanish"]["id"] = "Id";
	$fieldToolTipstransacciones["Spanish"]["id"] = "";
	$placeHolderstransacciones["Spanish"]["id"] = "";
	$fieldLabelstransacciones["Spanish"]["periodo_id"] = "Periodo Id";
	$fieldToolTipstransacciones["Spanish"]["periodo_id"] = "";
	$placeHolderstransacciones["Spanish"]["periodo_id"] = "";
	$fieldLabelstransacciones["Spanish"]["concepto_id"] = "Concepto Id";
	$fieldToolTipstransacciones["Spanish"]["concepto_id"] = "";
	$placeHolderstransacciones["Spanish"]["concepto_id"] = "";
	$fieldLabelstransacciones["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipstransacciones["Spanish"]["tipo"] = "";
	$placeHolderstransacciones["Spanish"]["tipo"] = "";
	$fieldLabelstransacciones["Spanish"]["monto"] = "Monto";
	$fieldToolTipstransacciones["Spanish"]["monto"] = "";
	$placeHolderstransacciones["Spanish"]["monto"] = "";
	if (count($fieldToolTipstransacciones["Spanish"]))
		$tdatatransacciones[".isUseToolTips"] = true;
}


	$tdatatransacciones[".NCSearch"] = true;



$tdatatransacciones[".shortTableName"] = "transacciones";
$tdatatransacciones[".nSecOptions"] = 0;

$tdatatransacciones[".mainTableOwnerID"] = "";
$tdatatransacciones[".entityType"] = 0;

$tdatatransacciones[".strOriginalTableName"] = "transacciones";

	



$tdatatransacciones[".showAddInPopup"] = false;

$tdatatransacciones[".showEditInPopup"] = false;

$tdatatransacciones[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatransacciones[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatransacciones[".listAjax"] = false;
//	temporary
$tdatatransacciones[".listAjax"] = false;

	$tdatatransacciones[".audit"] = false;

	$tdatatransacciones[".locking"] = false;


$pages = $tdatatransacciones[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatransacciones[".edit"] = true;
	$tdatatransacciones[".afterEditAction"] = 1;
	$tdatatransacciones[".closePopupAfterEdit"] = 1;
	$tdatatransacciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatransacciones[".add"] = true;
$tdatatransacciones[".afterAddAction"] = 1;
$tdatatransacciones[".closePopupAfterAdd"] = 1;
$tdatatransacciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatransacciones[".list"] = true;
}



$tdatatransacciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatransacciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatransacciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatransacciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatransacciones[".printFriendly"] = true;
}



$tdatatransacciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatransacciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatransacciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatransacciones[".isUseAjaxSuggest"] = true;

$tdatatransacciones[".rowHighlite"] = true;




$tdatatransacciones[".flexibleSearch"] = true;


$tdatatransacciones[".ajaxCodeSnippetAdded"] = false;

$tdatatransacciones[".buttonsAdded"] = false;

$tdatatransacciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatransacciones[".isUseTimeForSearch"] = false;


$tdatatransacciones[".badgeColor"] = "CD853F";


$tdatatransacciones[".allSearchFields"] = array();
$tdatatransacciones[".filterFields"] = array();
$tdatatransacciones[".requiredSearchFields"] = array();

$tdatatransacciones[".googleLikeFields"] = array();
$tdatatransacciones[".googleLikeFields"][] = "id";
$tdatatransacciones[".googleLikeFields"][] = "periodo_id";
$tdatatransacciones[".googleLikeFields"][] = "concepto_id";
$tdatatransacciones[".googleLikeFields"][] = "tipo";
$tdatatransacciones[".googleLikeFields"][] = "monto";



$tdatatransacciones[".tableType"] = "list";

$tdatatransacciones[".printerPageOrientation"] = 0;
$tdatatransacciones[".nPrinterPageScale"] = 100;

$tdatatransacciones[".nPrinterSplitRecords"] = 40;

$tdatatransacciones[".nPrinterPDFSplitRecords"] = 40;


$tdatatransacciones[".geocodingEnabled"] = false;










$tdatatransacciones[".pageSize"] = 20;

$tdatatransacciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatransacciones[".strOrderBy"] = $tstrOrderBy;

$tdatatransacciones[".orderindexes"] = array();

$tdatatransacciones[".sqlHead"] = "SELECT id,  	periodo_id,  	concepto_id,  	tipo,  	monto";
$tdatatransacciones[".sqlFrom"] = "FROM transacciones";
$tdatatransacciones[".sqlWhereExpr"] = "";
$tdatatransacciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatransacciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatransacciones[".arrGroupsPerPage"] = $arrGPP;

$tdatatransacciones[".highlightSearchResults"] = true;

$tableKeystransacciones = array();
$tableKeystransacciones[] = "id";
$tdatatransacciones[".Keys"] = $tableKeystransacciones;


$tdatatransacciones[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "transacciones";
	$fdata["Label"] = GetFieldLabel("transacciones","id");
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


	$tdatatransacciones["id"] = $fdata;
		$tdatatransacciones[".searchableFields"][] = "id";
//	periodo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "periodo_id";
	$fdata["GoodName"] = "periodo_id";
	$fdata["ownerTable"] = "transacciones";
	$fdata["Label"] = GetFieldLabel("transacciones","periodo_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "periodo_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "periodos";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatatransacciones["periodo_id"] = $fdata;
		$tdatatransacciones[".searchableFields"][] = "periodo_id";
//	concepto_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "concepto_id";
	$fdata["GoodName"] = "concepto_id";
	$fdata["ownerTable"] = "transacciones";
	$fdata["Label"] = GetFieldLabel("transacciones","concepto_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "concepto_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concepto_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "conceptos";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatatransacciones["concepto_id"] = $fdata;
		$tdatatransacciones[".searchableFields"][] = "concepto_id";
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "transacciones";
	$fdata["Label"] = GetFieldLabel("transacciones","tipo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatatransacciones["tipo"] = $fdata;
		$tdatatransacciones[".searchableFields"][] = "tipo";
//	monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "monto";
	$fdata["GoodName"] = "monto";
	$fdata["ownerTable"] = "transacciones";
	$fdata["Label"] = GetFieldLabel("transacciones","monto");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "monto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "monto";

	
	
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


	$tdatatransacciones["monto"] = $fdata;
		$tdatatransacciones[".searchableFields"][] = "monto";


$tables_data["transacciones"]=&$tdatatransacciones;
$field_labels["transacciones"] = &$fieldLabelstransacciones;
$fieldToolTips["transacciones"] = &$fieldToolTipstransacciones;
$placeHolders["transacciones"] = &$placeHolderstransacciones;
$page_titles["transacciones"] = &$pageTitlestransacciones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["transacciones"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["transacciones"] = array();



	
				$strOriginalDetailsTable="periodos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="periodos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "periodos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["transacciones"][0] = $masterParams;
				$masterTablesData["transacciones"][0]["masterKeys"] = array();
	$masterTablesData["transacciones"][0]["masterKeys"][]="id";
				$masterTablesData["transacciones"][0]["detailKeys"] = array();
	$masterTablesData["transacciones"][0]["detailKeys"][]="periodo_id";
		
	
				$strOriginalDetailsTable="conceptos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="conceptos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "conceptos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["transacciones"][1] = $masterParams;
				$masterTablesData["transacciones"][1]["masterKeys"] = array();
	$masterTablesData["transacciones"][1]["masterKeys"][]="id";
				$masterTablesData["transacciones"][1]["detailKeys"] = array();
	$masterTablesData["transacciones"][1]["detailKeys"][]="concepto_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_transacciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	periodo_id,  	concepto_id,  	tipo,  	monto";
$proto0["m_strFrom"] = "FROM transacciones";
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
	"m_strTable" => "transacciones",
	"m_srcTableName" => "transacciones"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "transacciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_id",
	"m_strTable" => "transacciones",
	"m_srcTableName" => "transacciones"
));

$proto8["m_sql"] = "periodo_id";
$proto8["m_srcTableName"] = "transacciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "concepto_id",
	"m_strTable" => "transacciones",
	"m_srcTableName" => "transacciones"
));

$proto10["m_sql"] = "concepto_id";
$proto10["m_srcTableName"] = "transacciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "transacciones",
	"m_srcTableName" => "transacciones"
));

$proto12["m_sql"] = "tipo";
$proto12["m_srcTableName"] = "transacciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "monto",
	"m_strTable" => "transacciones",
	"m_srcTableName" => "transacciones"
));

$proto14["m_sql"] = "monto";
$proto14["m_srcTableName"] = "transacciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "transacciones";
$proto17["m_srcTableName"] = "transacciones";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "periodo_id";
$proto17["m_columns"][] = "concepto_id";
$proto17["m_columns"][] = "tipo";
$proto17["m_columns"][] = "monto";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "transacciones";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "transacciones";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="transacciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_transacciones = createSqlQuery_transacciones();


	
		;

					

$tdatatransacciones[".sqlquery"] = $queryData_transacciones;

$tableEvents["transacciones"] = new eventsBase;
$tdatatransacciones[".hasEvents"] = false;

?>
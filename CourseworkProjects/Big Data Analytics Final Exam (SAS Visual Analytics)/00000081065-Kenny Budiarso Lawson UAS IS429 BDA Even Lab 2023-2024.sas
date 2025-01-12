session server;

/* Start checking for existence of each input table */
exists0=doesTableExist("CASUSER(kenny.budiarso@student.umn.ac.id)", "LOAN_DEFAULT");
if exists0 == 0 then do;
  print "Table "||"CASUSER(kenny.budiarso@student.umn.ac.id)"||"."||"LOAN_DEFAULT" || " does not exist.";
  print "UserErrorCode: 100";
  exit 1;
end;
print "Input table: "||"CASUSER(kenny.budiarso@student.umn.ac.id)"||"."||"LOAN_DEFAULT"||" found.";
/* End checking for existence of each input table */


  _dp_inputTable="LOAN_DEFAULT";
  _dp_inputCaslib="CASUSER(kenny.budiarso@student.umn.ac.id)";

  _dp_outputTable="5d86246a-3b78-4cf0-b384-f6d8ab73f356";
  _dp_outputCaslib="CASUSER(kenny.budiarso@student.umn.ac.id)";

    simple.groupByInfo /
    table ={ name="LOAN_DEFAULT" caslib="CASUSER(kenny.budiarso@student.umn.ac.id)"}
    inputs = {"LoanID"}
    casout = {replace=1, name="5d86246a-3b78-4cf0-b384-f6d8ab73f356" caslib="CASUSER(kenny.budiarso@student.umn.ac.id)"}
    includeMissing=TRUE generatedColumns={"NONE"};
  _dp_inputTable="5d86246a-3b78-4cf0-b384-f6d8ab73f356";
  _dp_inputCaslib="CASUSER(kenny.budiarso@student.umn.ac.id)";

  _dp_outputTable="5d86246a-3b78-4cf0-b384-f6d8ab73f356";
  _dp_outputCaslib="CASUSER(kenny.budiarso@student.umn.ac.id)";

/* BEGIN statement a896c902_5138_11e7_b114_b2f933d5fe66          casl */
_dp_inputCaslib="CASUSER(kenny.budiarso@student.umn.ac.id)";
_dp_inputTable="5d86246a-3b78-4cf0-b384-f6d8ab73f356";
_dp_outputCaslib="CASUSER(kenny.budiarso@student.umn.ac.id)";
_dp_outputTable="5d86246a-3b78-4cf0-b384-f6d8ab73f356";
    all_columns = columnList(_dp_inputCaslib, _dp_inputTable);
input_columns={"HASMORTGAGE"};
/* To replace column instead of creating a new one, replace the following line of code with */
/* copyvars_columns=all_columns-input_columns; */
copyvars_columns=all_columns;

dataPreprocess.catTrans status=rc /
    table={name=_dp_inputTable, caslib=_dp_inputCaslib}
    casout={name=_dp_outputTable, caslib=_dp_outputCaslib, promote=0, replace=1}
    inputs=input_columns
    method="ONEHOT"
    copyVars=copyvars_columns
    outVarsNamePrefix="ENC"
;
if rc.statusCode != 0 then do;
    print "Error running one-hot encoding action in CASL";
    exit 3;
end;




/* If the status code of the last action run is unsuccessful, then we should exit */
if _status.statusCode != 0 then do;
  exit 1;
end;
/* END statement a896c902_5138_11e7_b114_b2f933d5fe66            casl */
  _dp_inputTable="5d86246a-3b78-4cf0-b384-f6d8ab73f356";
  _dp_inputCaslib="CASUSER(kenny.budiarso@student.umn.ac.id)";

  _dp_outputTable="5d86246a-3b78-4cf0-b384-f6d8ab73f356";
  _dp_outputCaslib="CASUSER(kenny.budiarso@student.umn.ac.id)";

/* BEGIN statement a896c902_5138_11e7_b114_b2f933d5fe66          casl */
_dp_inputCaslib="CASUSER(kenny.budiarso@student.umn.ac.id)";
_dp_inputTable="5d86246a-3b78-4cf0-b384-f6d8ab73f356";
_dp_outputCaslib="CASUSER(kenny.budiarso@student.umn.ac.id)";
_dp_outputTable="5d86246a-3b78-4cf0-b384-f6d8ab73f356";
    all_columns = columnList(_dp_inputCaslib, _dp_inputTable);
input_columns={"HASDEPENDENTS"};
/* To replace column instead of creating a new one, replace the following line of code with */
/* copyvars_columns=all_columns-input_columns; */
copyvars_columns=all_columns;

dataPreprocess.catTrans status=rc /
    table={name=_dp_inputTable, caslib=_dp_inputCaslib}
    casout={name=_dp_outputTable, caslib=_dp_outputCaslib, promote=0, replace=1}
    inputs=input_columns
    method="ONEHOT"
    copyVars=copyvars_columns
    outVarsNamePrefix="ENC"
;
if rc.statusCode != 0 then do;
    print "Error running one-hot encoding action in CASL";
    exit 3;
end;




/* If the status code of the last action run is unsuccessful, then we should exit */
if _status.statusCode != 0 then do;
  exit 1;
end;
/* END statement a896c902_5138_11e7_b114_b2f933d5fe66            casl */
  _dp_inputTable="5d86246a-3b78-4cf0-b384-f6d8ab73f356";
  _dp_inputCaslib="CASUSER(kenny.budiarso@student.umn.ac.id)";

  _dp_outputTable="5d86246a-3b78-4cf0-b384-f6d8ab73f356";
  _dp_outputCaslib="CASUSER(kenny.budiarso@student.umn.ac.id)";

/* BEGIN statement a896c902_5138_11e7_b114_b2f933d5fe66          casl */
_dp_inputCaslib="CASUSER(kenny.budiarso@student.umn.ac.id)";
_dp_inputTable="5d86246a-3b78-4cf0-b384-f6d8ab73f356";
_dp_outputCaslib="CASUSER(kenny.budiarso@student.umn.ac.id)";
_dp_outputTable="5d86246a-3b78-4cf0-b384-f6d8ab73f356";
    all_columns = columnList(_dp_inputCaslib, _dp_inputTable);
input_columns={"HASCOSIGNER"};
/* To replace column instead of creating a new one, replace the following line of code with */
/* copyvars_columns=all_columns-input_columns; */
copyvars_columns=all_columns;

dataPreprocess.catTrans status=rc /
    table={name=_dp_inputTable, caslib=_dp_inputCaslib}
    casout={name=_dp_outputTable, caslib=_dp_outputCaslib, promote=0, replace=1}
    inputs=input_columns
    method="ONEHOT"
    copyVars=copyvars_columns
    outVarsNamePrefix="ENC"
;
if rc.statusCode != 0 then do;
    print "Error running one-hot encoding action in CASL";
    exit 3;
end;




/* If the status code of the last action run is unsuccessful, then we should exit */
if _status.statusCode != 0 then do;
  exit 1;
end;
/* END statement a896c902_5138_11e7_b114_b2f933d5fe66            casl */
  _dp_inputTable="5d86246a-3b78-4cf0-b384-f6d8ab73f356";
  _dp_inputCaslib="CASUSER(kenny.budiarso@student.umn.ac.id)";

  _dp_outputTable="LOAN_DEFAULT_1";
  _dp_outputCaslib="CASUSER(kenny.budiarso@student.umn.ac.id)";

srcCasTable="5d86246a-3b78-4cf0-b384-f6d8ab73f356";
srcCasLib="CASUSER(kenny.budiarso@student.umn.ac.id)";
tgtCasTable="LOAN_DEFAULT_1";
tgtCasLib="CASUSER(kenny.budiarso@student.umn.ac.id)";
saveType="sashdat";
tgtCasTableLabel="";
replace=1;
saveToDisk=1;

exists = doesTableExist(tgtCasLib, tgtCasTable);
if (exists !=0) then do;
  if (replace == 0) then do;
    print "Table already exists and replace flag is set to false.";
    exit ({severity=2, reason=5, formatted="Table already exists and replace flag is set to false.", statusCode=9});
  end;
end;

if (saveToDisk == 1) then do;
  /* Save will automatically save as type represented by file ext */
  saveName=tgtCasTable;
  if(saveType != "") then do;
    saveName=tgtCasTable || "." || saveType;
  end;
  table.save result=r status=rc / caslib=tgtCasLib name=saveName replace=replace
    table={
      caslib=srcCasLib
      name=srcCasTable
    };
  if rc.statusCode != 0 then do;
    return rc.statusCode;
  end;
  tgtCasPath=dictionary(r, "name");

  dropTableIfExists(tgtCasLib, tgtCasTable);
  dropTableIfExists(tgtCasLib, tgtCasTable);

  table.loadtable result=r status=rc / caslib=tgtCasLib path=tgtCasPath casout={name=tgtCasTable caslib=tgtCasLib} promote=1;
  if rc.statusCode != 0 then do;
    return rc.statusCode;
  end;
end;

else do;
  dropTableIfExists(tgtCasLib, tgtCasTable);
  dropTableIfExists(tgtCasLib, tgtCasTable);
  table.promote result=r status=rc / caslib=srcCasLib name=srcCasTable target=tgtCasTable targetLib=tgtCasLib;
  if rc.statusCode != 0 then do;
    return rc.statusCode;
  end;
end;


dropTableIfExists("CASUSER(kenny.budiarso@student.umn.ac.id)", "5d86246a-3b78-4cf0-b384-f6d8ab73f356");

function doesTableExist(casLib, casTable);
  table.tableExists result=r status=rc / caslib=casLib table=casTable;
  tableExists = dictionary(r, "exists");
  return tableExists;
end func;

function dropTableIfExists(casLib,casTable);
  tableExists = doesTableExist(casLib, casTable);
  if tableExists != 0 then do;
    print "Dropping table: "||casLib||"."||casTable;
    table.dropTable result=r status=rc/ caslib=casLib table=casTable quiet=0;
    if rc.statusCode != 0 then do;
      exit();
    end;
  end;
end func;

/* Return list of columns in a table */
function columnList(casLib, casTable);
  table.columnInfo result=collist / table={caslib=casLib,name=casTable};
  ndimen=dim(collist['columninfo']);
  featurelist={};
  do i =  1 to ndimen;
    featurelist[i]=upcase(collist['columninfo'][i][1]);
  end;
  return featurelist;
end func;

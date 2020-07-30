@extends('layouts.app')

@section('content')
<head>
<script>
        
        var colIndex;
        var rowIndex;
        var buttonID;
        var divIndex;
        var editIndex;
        var updateIndex;
        var editBoolean = false;
        var updateBoolean = false;
        
        var ii;
        var jj;
       
       function init() {

                var users = {!! json_encode($users  '', JSON_HEX_TAG) !!};
                var myArray = JSON.stringify(users);
                //console.log(myArray);

                mydata=$.parseJSON(myArray);
                
                console.log(mydata);
                
                /*
                mydata=[
                    
                {"ModuleName":"L2","PrimaryKey":"L2_101_1_2018","Col7":120,"Col8":"Durchschnittliche Wartezeit in der Warteschlange (nicht unterbrechbar, kann geroutet werden) pro Kundenkontakt","Col9":"99"},
                {"ModuleName":"L2","PrimaryKey":"L2_102_1_2018","Col7":102,"Col8":"Anzahl pers\u00f6nlich angenommener Anrufe im Verh\u00e4ltnis zur gesamten Anzahl Anrufe in der Warteschlange","Col9":"0.9"},
                {"ModuleName":"L2","PrimaryKey":"L2_103_1_2018","Col7":103,"Col8":"Durchschnittliche Gespr\u00e4chszeit mit dem Kunden","Col9":"345"},
                {"ModuleName":"L2","PrimaryKey":"L2_104_1_2018","Col7":104,"Col8":"Durchschnittliche Bearbeitungszeit nach Beendigung der Gespr\u00e4chs","Col9":"400"},
                {"ModuleName":"L2","PrimaryKey":"L2_105_1_2018","Col7":105,"Col8":"Durchschnittliche Servicezeit pro Standardwoche","Col9":"55"},
                {"ModuleName":"L2","PrimaryKey":"L2_106_1_2018","Col7":106,"Col8":"Anzahl der Cross-Selling-Erfolge im Verh\u00e4ltnis zur Gesamtzahl der Kundenanrufe","Col9":"0"},
                {"ModuleName":"L2","PrimaryKey":"L2_201_1_2018","Col7":201,"Col8":"Gesamtkosten f\u00fcr die Erbringung der Leistungen des Moduls (ohne 207)","Col9":"2384.96"},
                {"ModuleName":"L2","PrimaryKey":"L2_202_1_2018","Col7":202,"Col8":"davon: Personalkosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"0"},
                {"ModuleName":"L2","PrimaryKey":"L2_203_1_2018","Col7":203,"Col8":"davon: Arbeitnehmer\u00fcberlassungskosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"0"},
                {"ModuleName":"L2","PrimaryKey":"L2_204_1_2018","Col7":204,"Col8":"davon: Fremdleistungskosten (Materialkosten und bezogene Leistungen) f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"2384.96"},
                {"ModuleName":"L2","PrimaryKey":"L2_205_1_2018","Col7":205,"Col8":"davon: Sonstige betriebliche Kosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"0"},
                {"ModuleName":"L2","PrimaryKey":"L2_206_1_2018","Col7":206,"Col8":"davon: Anteilige Abschreibungen f\u00fcr die Erbringung der Leistungen des Moduls (ohne IT-Abschreibungen)","Col9":"0"},
                {"ModuleName":"L2","PrimaryKey":"L2_207_1_2018","Col7":207,"Col8":"Overheadkosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"0"},
                {"ModuleName":"L2","PrimaryKey":"L2_301_1_2018","Col7":301,"Col8":"Anzahl Kontakte in der telefonischen Kundenbetreuung","Col9":"242200"},
                {"ModuleName":"L2","PrimaryKey":"L2_302_1_2018","Col7":302,"Col8":"K1:","Col9":"0.15"},
                {"ModuleName":"L2","PrimaryKey":"L2_302_2_2018","Col7":302,"Col8":"K2:","Col9":"0.19"},
                {"ModuleName":"L2","PrimaryKey":"L2_302_3_2018","Col7":302,"Col8":"K3:","Col9":"0.14"},
                {"ModuleName":"L2","PrimaryKey":"L2_302_4_2018","Col7":302,"Col8":"K4:","Col9":"0.08"},
                {"ModuleName":"L2","PrimaryKey":"L2_302_5_2018","Col7":302,"Col8":"K5:","Col9":"0.08"},
                {"ModuleName":"L2","PrimaryKey":"L2_302_6_2018","Col7":302,"Col8":"K6:","Col9":"0.36"},
                {"ModuleName":"L2","PrimaryKey":"L2_303_1_2018","Col7":303,"Col8":"K1:","Col9":"0"},
                {"ModuleName":"L2","PrimaryKey":"L2_303_2_2018","Col7":303,"Col8":"K2:","Col9":"0"},
                {"ModuleName":"L2","PrimaryKey":"L2_303_3_2018","Col7":303,"Col8":"K3:","Col9":"0"},
                {"ModuleName":"L2","PrimaryKey":"L2_303_4_2018","Col7":303,"Col8":"K4:","Col9":"0"},
                {"ModuleName":"L2","PrimaryKey":"L2_304_1_2018","Col7":304,"Col8":"Bei Preis je Minute: vorgegebene maximale Gespr\u00e4chszeit","Col9":"0"},
                {"ModuleName":"L2","PrimaryKey":"L2_305_1_2018","Col7":305,"Col8":"H\u00f6he der eigenen Mitarbeiterkapazit\u00e4ten","Col9":"0"},
                
                {"ModuleName":"L2","PrimaryKey":"L2_306_1_2018","Col7":306,"Col8":"H\u00f6he der fremden Mitarbeiterkapazit\u00e4ten","Col9":"41.549623692308"},
                
                
                {"ModuleName":"L1","PrimaryKey":"L1_101_1_2018","Col7":101,"Col8":"Durchschnittliche \u00d6ffnungszeit pro Standardwoche","Col9":"50"},
                {"ModuleName":"L1","PrimaryKey":"L1_102_1_2018","Col7":102,"Col8":"Durchschnittliche Wartezeit von \u201eBetreten des Servicecenters\u201c bis zum Start der Bearbeitung beim Kundencenter-Mitarbeiter","Col9":"8"},
                {"ModuleName":"L1","PrimaryKey":"L1_103_1_2018","Col7":103,"Col8":"Anzahl der Cross-Selling-Erfolge im Verh\u00e4ltnis zur Gesamtzahl der Kundenbesuche","Col9":"0"},
                {"ModuleName":"L1","PrimaryKey":"L1_201_1_2018","Col7":201,"Col8":"Gesamtkosten f\u00fcr die Erbringung der Leistungen des Moduls (ohne 207)","Col9":"1038.9942545006"},
                {"ModuleName":"L1","PrimaryKey":"L1_202_1_2018","Col7":202,"Col8":"davon: Personalkosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"876.42217714513"},
                {"ModuleName":"L1","PrimaryKey":"L1_203_1_2018","Col7":203,"Col8":"davon: Arbeitnehmer\u00fcberlassungskosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"0"},
                {"ModuleName":"L1","PrimaryKey":"L1_204_1_2018","Col7":204,"Col8":"davon: Fremdleistungskosten (Materialkosten und bezogene Leistungen) f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"14.576"},
                {"ModuleName":"L1","PrimaryKey":"L1_205_1_2018","Col7":205,"Col8":"davon: Sonstige betriebliche Kosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"134.54336046888"},
                {"ModuleName":"L1","PrimaryKey":"L1_206_1_2018","Col7":206,"Col8":"davon: Anteilige Abschreibungen f\u00fcr die Erbringung der Leistungen des Moduls (ohne IT-Abschreibungen)","Col9":"13.452716886588"},
                {"ModuleName":"L1","PrimaryKey":"L1_207_1_2018","Col7":207,"Col8":"Overheadkosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"335.82456874576"},
                {"ModuleName":"L1","PrimaryKey":"L1_301_1_2018","Col7":301,"Col8":"Anzahl Kontakte im pers\u00f6nlichen Kundencenter","Col9":"70716"},
                {"ModuleName":"L1","PrimaryKey":"L1_302_1_2018","Col7":302,"Col8":"Anzahl der permanenten Kundencenter f\u00fcr eine pers\u00f6nliche Kundenbetreuung ","Col9":"1"},
                {"ModuleName":"L1","PrimaryKey":"L1_303_1_2018","Col7":303,"Col8":"Pflege von Kundenkontaktdaten in einem CRM-System","Col9":"10"},
                {"ModuleName":"L1","PrimaryKey":"L1_304_1_2018","Col7":304,"Col8":"H\u00f6he der eigenen Mitarbeiterkapazit\u00e4ten","Col9":"12.319018404908"},
                {"ModuleName":"L1","PrimaryKey":"L1_305_1_2018","Col7":305,"Col8":"H\u00f6he der fremden Mitarbeiterkapazit\u00e4ten","Col9":"0"},
                    
                {"ModuleName":"M2","PrimaryKey":"M2_101_1_2018","Col7":101,"Col8":"Durchschnittliche Wartezeit in der Warteschlange (nicht unterbrechbar, kann geroutet werden) pro Kundenkontakt","Col9":"99"},
                {"ModuleName":"M2","PrimaryKey":"M2_102_1_2018","Col7":102,"Col8":"Anzahl pers\u00f6nlich angenommener Anrufe im Verh\u00e4ltnis zur gesamten Anzahl Anrufe in der Warteschlange","Col9":"0.9"},
                {"ModuleName":"M2","PrimaryKey":"M2_103_1_2018","Col7":103,"Col8":"Durchschnittliche Gespr\u00e4chszeit mit dem Kunden","Col9":"345"},
                {"ModuleName":"M2","PrimaryKey":"M2_203_2_2018","Col7":203,"Col8":"davon: Arbeitnehmer\u00fcberlassungskosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"0"},
                {"ModuleName":"M2","PrimaryKey":"M2_204_1_2018","Col7":204,"Col8":"davon: Fremdleistungskosten (Materialkosten und bezogene Leistungen) f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"2384.96"},
                {"ModuleName":"M2","PrimaryKey":"M2_205_1_2018","Col7":205,"Col8":"davon: Sonstige betriebliche Kosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"0"},
                {"ModuleName":"M2","PrimaryKey":"M2_304_1_2018","Col7":304,"Col8":"Bei Preis je Minute: vorgegebene maximale Gespr\u00e4chszeit","Col9":"0"},
                {"ModuleName":"M2","PrimaryKey":"M2_305_1_2018","Col7":305,"Col8":"H\u00f6he der eigenen Mitarbeiterkapazit\u00e4ten","Col9":"100"},
                {"ModuleName":"M2","PrimaryKey":"M2_306_1_2018","Col7":306,"Col8":"H\u00f6he der fremden Mitarbeiterkapazit\u00e4ten","Col9":"41.549623692308"},
                ];
               */

                var uniqueModuleName = new Array();

                //alert(mydata);
                //alert(mydata[0]);

                for(i = 0; i< mydata.length; i++){    
                  
                    

                    if(uniqueModuleName.indexOf(mydata[i].ModuleName) === -1)
                    {
                        uniqueModuleName.push(mydata[i].ModuleName);        
                        
                    }        
                }
                
                

                for(var z=0;z<uniqueModuleName.length;z++) {
                    
                    $('#mainTable').append(
                        '<tr class="utable-row" data-toggle="collapse" style="color:#fff;" data-target="#divtable'+uniqueModuleName[z]+'">'
                            +'<td>'+uniqueModuleName[z]+'</td>'
                            
                        +'</tr>'

                        +'<tr>'
                            +'<td colspan="100" class="hiddenRow">'
                                +'<div class="collapse" id="divtable'+uniqueModuleName[z]+'">'
                                    +'<div class="container">'
                                        +'<div class="row">'
                                            +'<div class="col-sm-4">'   
                                                +'<input type="button" class="btn btn-primary udiv-button" id="udiv-btn_'+uniqueModuleName[z]+'_1" value="Qualitätskennzahlen" style="margin: 5px;"/>'
                                            +'</div>'
                                            +'<div class="col-sm-4">'
                                                +'<input type="button" class="btn btn-primary udiv-button" id="udiv-btn_'+uniqueModuleName[z]+'_2" value="Kostenkennzahlen"  style="margin: 5px;"/>'
                                            +'</div>'
                                            +'<div class="col-sm-4">'
                                                +'<input type="button" class="btn btn-primary udiv-button" id="udiv-btn_'+uniqueModuleName[z]+'_3" value="Strukturkennzahlen"  style="margin: 5px;"/>'
                                            +'</div>'
                                        +'</div>'
                                    +'</div>'
                                    +'<br/>'
                                    +'<div id="tableContainer">'
                                    +'</div>'
                                +'</div>'
                            +'</td>'
                        +'</tr>'
                    );

                };
                // Close all other divs
               $('.collapse').on('show.bs.collapse', function () {
                   $('.collapse').collapse('hide');
                   $('#divtable'+ii).find('#dataTable').remove();
               });
                // / Close all other divs
                

/*                 $('.utable-row').on('click',function() {

                    colIndex = $(this).parent().children().index($(this));
                    colIndex=colIndex/2;
                    var colIndexDiv=colIndex+1;
                })
                */



                var a=new Array();

                $('.udiv-button').on('click',function() {
                    var str="";
                    var str1="";
                    
                    buttonID=$(this).attr('id');
                    //alert(buttonID);
                    ii=buttonID.split('_')[1];
                    jj=buttonID.split('_')[2];
                    
                    //alert(mydata[0].ModuleName+" "+uniqueModuleName[0]);
                    $('#divtable'+ii).find('#dataTable').remove();
                    
                    
                        
              
                    
                    for(var l=0;l<uniqueModuleName.length;l++) {
                        var result = mydata.filter(x => x.ModuleName === uniqueModuleName[l]);
                        window['levels_'+(uniqueModuleName[l])]= result;
                        
                    }
                    //console.log(JSON.stringify(levels_L1));
                    //console.log(JSON.stringify(levels_L2));
                    //console.log(JSON.stringify(levels_M2));
                
                for(var k=0;k<window['levels_'+ii].length;k++) {
                    if(((parseInt(window['levels_'+ii][k].Col7) >= 100) && (parseInt(window['levels_'+ii][k].Col7) < 200)) && (jj==1)) {
                        //alert(window['levels_'+ii][k].PrimaryKey);
                       str1+= '<tbody>'
                                    +'<tr  style="border:0px solid red;">'
                                        +'<form action="{{url('UpdateExcelData')}}" method="Post"" id="myForm_'+ii+'_'+jj+'_'+k+'">@csrf'
                                            +'<td style="display:none;"><input type="text" name="PrimaryKey" id="myPK_'+ii+'_'+jj+'_'+k+'" value="'+window['levels_'+ii][k].PrimaryKey+'"/></td>'
                                            +'<td>'+window['levels_'+ii][k].Col7+'</td>'
                                            +'<td style="text-align:left;">'+window['levels_'+ii][k].Col8+'</td>'
                                            +'<td><input type="text" style="background-color:#404449;border:none;width:5em;text-align:center;color:#fff" name="Col9" id="myinput_'+ii+'_'+jj+'_'+k+'" value="'+window['levels_'+ii][k].Col9+'" readonly="readonly"/></td>'
                                            //+'<td>'+window['levels_'+ii][k].Unit+'</td>'
                                            //alert(window['levels_'+ii][k].Col9);

                                            +'<td>'
                                                +'<button type="button" class="btn btn-light uedit-button" style="background-color:#404449;border:0px" id="edit_'+ii+'_'+jj+'_'+k+'" title="Edit"><i class="far fa-edit fa-1x img-fluid" style="color:#fff"></i></button>'
                                                +'<button type="button" class="btn btn-light uupdate-button"  style="background-color:#404449;border:0px" id="update_'+ii+'_'+jj+'_'+k+'" title="Update"><i class="fas fa-sync fa-1x img-fluid" style="color:#fff"></i></button>'
                                            +'</td>'
                                        +'</form>'
                                    +'</tr>'
                            +'</tbody>'
                    }
                    
                    if(((parseInt(window['levels_'+ii][k].Col7) >= 200) && (parseInt(window['levels_'+ii][k].Col7) < 300)) && (jj==2)) {
                       str1+= '<tbody>'
                                    +'<tr  style="border:0px solid red;">'
                                        +'<form action="{{url('UpdateExcelData')}}" method="Post"" id="form2">@csrf'
                                            +'<td style="display:none;"><input type="text" name="PrimaryKey" id="myPK_'+ii+'_'+jj+'_'+k+'" value="'+window['levels_'+ii][k].PrimaryKey+'"/></td>'
                                            +'<td>'+window['levels_'+ii][k].Col7+'</td>'
                                            +'<td style="text-align:left;">'+window['levels_'+ii][k].Col8+'</td>'
                                            //+'<td><input type="text" style="background-color:#404449;border:none" name="Col9" id="myinput_'+ii+'_'+jj+'_'+k+'" value="'+window['levels_'+ii][k].Col9+'" readonly="readonly"/></td>'
                                            +'<td><input type="text" style="background-color:#404449;border:none;width:5em;text-align:center;color:#fff" name="Col9" id="myinput_'+ii+'_'+jj+'_'+k+'" value="'+window['levels_'+ii][k].Col9+'" readonly="readonly"/></td>'
                                            //+'<td>'+window['levels_'+ii][k].Unit+'</td>'
                                            //alert(window['levels_'+ii][k].Col9);

                                            +'<td>'
                                                +'<button type="button" class="btn btn-light uedit-button" style="background-color:#404449;border:0px" id="edit_'+ii+'_'+jj+'_'+k+'" title="Edit"><i class="far fa-edit fa-2x img-fluid" style="color:#fff"></i></button>'
                                                +'<button type="button" class="btn btn-light uupdate-button"  style="background-color:#404449;border:0px" id="update_'+ii+'_'+jj+'_'+k+'" title="Update"><i class="fas fa-sync fa-2x img-fluid" style="color:#fff"></i></button>'
                                            +'</td>'
                                        +'</form>'
                                    +'</tr>'
                            +'</tbody>'
                    }
                    if(((parseInt(window['levels_'+ii][k].Col7) >= 300) && (parseInt(window['levels_'+ii][k].Col7) < 400)) && (jj==3)) {
                       str1+= '<tbody>'
                                    +'<tr  style="border:0px solid red;">'
                                        +'<form action="{{url('UpdateExcelData')}}" method="Post"" id="form3">@csrf'
                                            +'<td style="display:none;"><input type="text" name="PrimaryKey" id="myPK_'+ii+'_'+jj+'_'+k+'" value="'+window['levels_'+ii][k].PrimaryKey+'"/></td>'
                                            +'<td>'+window['levels_'+ii][k].Col7+'</td>'
                                            +'<td style="text-align:left;">'+window['levels_'+ii][k].Col8+'</td>'
                                            //+'<td><input type="text" style="background-color:#404449;border:none" name="Col9" id="myinput_'+ii+'_'+jj+'_'+k+'" value="'+window['levels_'+ii][k].Col9+'" readonly="readonly"/></td>'
                                            //+'<td><input type="text" style="background-color:#404449;border:none;width:5em;text-align:center;color:#fff" name="Col9" id="myinput_'+ii+'_'+jj+'_'+k+'" value="'+window['levels_'+ii][k].Col9+'" readonly="readonly"/></td>'
                                            +'<td><input type="text" style="background-color:#404449;border:none;width:5em;text-align:center;color:#fff" name="Col9" id="myinput_'+ii+'_'+jj+'_'+k+'" value="'+window['levels_'+ii][k].Col9+'" readonly="readonly"/></td>'
                                            //+'<td>'+window['levels_'+ii][k].Unit+'</td>'
                                            //alert(window['levels_'+ii][k].Col9);

                                            +'<td>'
                                                +'<button type="button" class="btn btn-light uedit-button" style="background-color:#404449;border:0px" id="edit_'+ii+'_'+jj+'_'+k+'" title="Edit"><i class="far fa-edit fa-2x img-fluid" style="color:#fff"></i></button>'
                                                +'<button type="button" class="btn btn-light uupdate-button"  style="background-color:#404449;border:0px" id="update_'+ii+'_'+jj+'_'+k+'" title="Update"><i class="fas fa-sync fa-2x img-fluid" style="color:#fff"></i></button>'
                                            +'</td>'
                                        +'</form>'
                                    +'</tr>'
                            +'</tbody>'
                    }
                };
                
                            
                    str='<table id="dataTable" class="table table-striped table-bordered table-dark">'
                            +'<thead>'
                                +'<tr>'
                                     +'<th>PrimaryKey</th>'
                                    +'<th>Col 7</th>'
                                    +'<th style="text-align:center;">Col 8</th>'
                                    +'<th>Col 9</th>'
                                    //+'<th>Unit</th>'
                                    +'<th>Action</th>'
                                +'</tr>'
                              +'</thead>'
                                
                                + str1
                              
                        +'</table>';
                  
                    $('#divtable'+ii).append(str);
                    $('#dataTable tr th:nth-child(1)').hide();
                    $('#dataTable tr td:nth-child(1)').hide();
                    $('.uedit-button').css('cursor','pointer')
                    $('.uupdate-button').css('cursor','pointer')
                   
// ------------------------ Edit and Update ----------------------
                   
var rootref;
            var tdVal;  
            var rowindex;
            var tdVal;
            var tdVal1;
            var tdVal2;
            var tdVal3;
            var mydataIndex;
                    $('.uupdate-button').hide();
                    $('.uedit-button').on('click',function() {
                        

                        
                        rootref=$(this).parent().parent().parent();
                        //tdVal=rootref.children('td:nth-child(4)');
                        tdVal1=rootref.children('td:nth-child(1)').text();
                        tdVal2=rootref.children('td:nth-child(2)');
                        tdVal3=rootref.children('td:nth-child(3)').text();
                        editIndex=$(this).attr('id').split('t')[1];
                        //alert(tdVal1);
                        for(i = 0; i< mydata.length; i++){    
                             if(mydata[i].PrimaryKey==tdVal1){
                                 mydataIndex=i;
                                 
                             }      
                        }
                        
                        
                        tdVal=$(this).attr('id').split("t")[1];;
                        //alert(tdVal);
                        //alert("edit_"+ii+"_"+jj+"_"+k);
                        $("#myinput"+tdVal).attr("readonly", false); 
                        $("#myinput"+tdVal).css('background-color', 'white'); 
                        $("#myinput"+tdVal).css('color', 'black'); 
                        //alert(rootref.text());
                        //tdVal.html('<input type="number" class="form-control txtarea myclass" id="ValText'+editIndex+'" value="'+tdVal.text()+'"/>');
                       
                        $(this).hide();
                        $('#update'+ editIndex).show();
                    });
            var one;
            var two;
            var three;
            var updatedVal;
                    $('.uupdate-button').on('click',function() {
                        rootref=$(this).parent().parent().parent();
                        //tdVal=rootref.children('td:nth-child(4)');
                        tdVal=$(this).attr('id').split("e")[1];
                        updateIndex=$(this).attr('id').split('e')[1];
                        
                        one=updateIndex.split('_')[1];
                        two=updateIndex.split('_')[2];
                        three=updateIndex.split('_')[3];
                        
                        //alert(document.getElementById("PrimaryKey"));

                        //alert(one+"   "+two+"  "+three);
                        updatedVal=$("#myinput"+tdVal).val();
                        if(updatedVal=="") {
                            alert("Input field is mandatory.");
                        }
                        
                        //alert(mydata[one-1].btnData[two-1].tableArr[three].Col9);
                        else {
                            //alert($(this).attr('id'));
                            tdVal=$(this).attr('id').split("e")[1];
                            //alert(rootref.children('td:nth-child(3)').text());
                            //alert("Finally :: "+mydataIndex);
                            //mydata[mydataIndex].Col9=updatedVal;
                            //alert(tdVal);
                            //$("#myForm"+tdVal).submit();
                            
                            $("#myinput"+tdVal).attr("readonly", true); 
                            $("#myinput"+tdVal).css('background-color', '#404449'); 
                            $("#myinput"+tdVal).css('color', '#fff'); 
                            //alert($("#myPK"+tdVal).val()+  '  ' +$("#myinput"+tdVal).val());    
                            //tdVal.text(updatedVal);
                            //alert(tdVal.text(updatedVal));    

                            $(this).hide();
                            $('#edit'+ tdVal).show();
                        }
                    });
                    
// ------------------------ End of Edit and Update ----------------      

                })

                //var mydata1=mydata;  
                
                
                
                $('#getNewJson').on('click',function(e) 
                   {  
                    e.preventDefault();
                    //var myNewData =  mydata[0].PrimaryKey; 

                    var mydata1=new Array();
                        for(i = 0; i< mydata.length; i++){   
                            var temp=    {
                                            "PrimaryKey":mydata[i].PrimaryKey,
                                            "Col9":mydata[i].Col9
                                        }
                            mydata1.push(temp);
                        }   
                    //alert(pmkey);
                        //var myVar = mydata1);    
                        //var myNewData = JSON.stringify(mydata1);

                        var myNewData = JSON.stringify(mydata);

                        //document.getElementById("IDexceldata").value = myNewData;
                        //document.getElementById("f1").submit();
                    })

                    
               /* 
               $('#getNewJson').on('click',function() 
               {
                   var myNewData = JSON.stringify(mydata);
                   //var myNewData = JSON.parse(mydata);
                   //var myNewData = JSON.parse(JSON.stringify(mydata));
                   document.getElementById("IDexceldata").value = myNewData;
                   document.getElementById("f1").submit();
               })
               */
            }

    </script>
    
</head>

<div class="bodydiv">
<body onload="init()">
    <br/>
    <form action="{{url('UpdateExcelData')}}" method="Post">
    @csrf
    <div class="container">
    @if (Auth::user()->usertype=="CGSuperUser")    

<div class="row" style="border:0px solid red">
    <div class="col-xs-3">
        <label for="class_type"><span class=" label label-primary" style="color:#fff">You Logged in as <b>{{Auth::user()->name}}</b> and reviewing data for company   </span></label>
    </div>
    <div class="col-xs-2" style="margin-top:-10px;margin-left:10px">
        <select name="class_type" id="class_type" class="  form-control input-lg" style="width:200px" autocomplete="off">
        <option>C&C</option>
        <option>DEW21</option>
        <option>E.ON Lieferant</option>
        <option>eins energie</option>
        <option>EnBW</option>
        <option>envia</option>
        <option>EWE Vertrieb</option>
        <option>Gelsenwasser</option>
        <option>Hamburg Energie</option>
        <option>Innogy</option>
        <option>Lekker</option>
        <option>Mitnetz</option>
        <option>N-ERGIE</option>
        <option>Netze BW</option>
        <option>RÃ¶hnEnergie</option>
        <option>SW Frankenthal</option>
        <option>SW Halle</option>
        <option>SW Kaiserslautern</option>
        <option>SWD</option>
        <option>Westnetz</option>
        </select>
    </div>
     
@endif
     <br/>
        <table class="table table-bordered table-striped umainTable" id="mainTable" style="margin-top:10px">
            <thead>
                <tr>
                    <th><center>L Section </center></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <!--<input type="hidden" name="IDexceldata" class="form-control" id="IDexceldata">-->
        <input type="button" id='getNewJson' value="Get Updated Json"/>
    </div>
    
    <div style="text-align:center">
        <a href='home' class="col-sm-3 btn btn-primary" style="margin:2px;margin:0 auto" type="submit">Submit For Review</a>
    </div> 
    </form>        
</body>
</div> 

@endsection

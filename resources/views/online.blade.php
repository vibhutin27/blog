<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<title> :: Sample :: </title>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<script src="Script/jquery-3.5.1.min.js"></script>

        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        <script src="Script/bootstrap.js"></script>
        
   

        <link rel="stylesheet" href="css/jquery-ui.css" type="text/css"/>
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
        <link rel="stylesheet" href="css/Style.css" type="text/css"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script>


    $(document).ready(function(){
        $('#ReviewData').css({ 'font-weight': 'bold','text-decoration':'none','background-color':'grey'});


        
        var colIndex;
        var rowIndex;
        var buttonID;
        var divIndex;
        var editIndex;
        var updateIndex;
        var editBoolean = false;
        var updateBoolean = false;
        var rootref;
        var tdVal;
        var ii;
        var jj;
        var textVal;
        var finalData=new Array();
        var newFinalData=new Array();
        var pk;
       init();
       function init() {

                
                
                mydata=[
                    
                {"ModuleName":"L2","PrimaryKey":"L2_101_1_2018","Col7":120,"Col8":"L2 Durchschnittliche Wartezeit in der Warteschlange (nicht unterbrechbar, kann geroutet werden) pro Kundenkontakt","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_102_1_2018","Col7":102,"Col8":"L2 Anzahl pers\u00f6nlich angenommener Anrufe im Verh\u00e4ltnis zur gesamten Anzahl Anrufe in der Warteschlange","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_103_1_2018","Col7":103,"Col8":"L2 Durchschnittliche Gespr\u00e4chszeit mit dem Kunden","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_104_1_2018","Col7":104,"Col8":"L2 Durchschnittliche Bearbeitungszeit nach Beendigung der Gespr\u00e4chs","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_105_1_2018","Col7":105,"Col8":"L2 Durchschnittliche Servicezeit pro Standardwoche","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_106_1_2018","Col7":106,"Col8":"L2 Anzahl der Cross-Selling-Erfolge im Verh\u00e4ltnis zur Gesamtzahl der Kundenanrufe","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_201_1_2018","Col7":201,"Col8":"L2 Gesamtkosten f\u00fcr die Erbringung der Leistungen des Moduls (ohne 207)","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_202_1_2018","Col7":202,"Col8":"L2 davon: Personalkosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_203_1_2018","Col7":203,"Col8":"L2 davon: Arbeitnehmer\u00fcberlassungskosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_204_1_2018","Col7":204,"Col8":"L2 davon: Fremdleistungskosten (Materialkosten und bezogene Leistungen) f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_205_1_2018","Col7":205,"Col8":"L2 davon: Sonstige betriebliche Kosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_206_1_2018","Col7":206,"Col8":"L2 davon: Anteilige Abschreibungen f\u00fcr die Erbringung der Leistungen des Moduls (ohne IT-Abschreibungen)","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_207_1_2018","Col7":207,"Col8":"L2 Overheadkosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_301_1_2018","Col7":301,"Col8":"L2 Anzahl Kontakte in der telefonischen Kundenbetreuung","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_302_1_2018","Col7":302,"Col8":"L2 K1:","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_302_2_2018","Col7":302,"Col8":"L2 K2:","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_302_3_2018","Col7":302,"Col8":"L2 K3:","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_302_4_2018","Col7":302,"Col8":"L2 K4:","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_302_5_2018","Col7":302,"Col8":"L2 K5:","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_302_6_2018","Col7":302,"Col8":"L2 K6:","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_303_1_2018","Col7":303,"Col8":"L2 K1:","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_303_2_2018","Col7":303,"Col8":"L2 K2:","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_303_3_2018","Col7":303,"Col8":"L2 K3:","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_303_4_2018","Col7":303,"Col8":"L2 K4:","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_304_1_2018","Col7":304,"Col8":"L2 Bei Preis je Minute: vorgegebene maximale Gespr\u00e4chszeit","Col9":"","Unit":100},
                {"ModuleName":"L2","PrimaryKey":"L2_305_1_2018","Col7":305,"Col8":"L2 H\u00f6he der eigenen Mitarbeiterkapazit\u00e4ten","Col9":"","Unit":100},
                
                {"ModuleName":"L2","PrimaryKey":"L2_306_1_2018","Col7":306,"Col8":"L2 H\u00f6he der fremden Mitarbeiterkapazit\u00e4ten","Col9":"","Unit":100},
                
                
                {"ModuleName":"L1","PrimaryKey":"L1_101_1_2018","Col7":101,"Col8":"L1 Durchschnittliche \u00d6ffnungszeit pro Standardwoche","Col9":"","Unit":100},
                {"ModuleName":"L1","PrimaryKey":"L1_102_1_2018","Col7":102,"Col8":"L1 Durchschnittliche Wartezeit von \u201eBetreten des Servicecenters\u201c bis zum Start der Bearbeitung beim Kundencenter-Mitarbeiter","Col9":"","Unit":100},
                {"ModuleName":"L1","PrimaryKey":"L1_103_1_2018","Col7":103,"Col8":"L1 Anzahl der Cross-Selling-Erfolge im Verh\u00e4ltnis zur Gesamtzahl der Kundenbesuche","Col9":"","Unit":100},
                {"ModuleName":"L1","PrimaryKey":"L1_201_1_2018","Col7":201,"Col8":"L1 Gesamtkosten f\u00fcr die Erbringung der Leistungen des Moduls (ohne 207)","Col9":"","Unit":100},
                {"ModuleName":"L1","PrimaryKey":"L1_202_1_2018","Col7":202,"Col8":"L1 davon: Personalkosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                {"ModuleName":"L1","PrimaryKey":"L1_203_1_2018","Col7":203,"Col8":"L1 davon: Arbeitnehmer\u00fcberlassungskosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                {"ModuleName":"L1","PrimaryKey":"L1_204_1_2018","Col7":204,"Col8":"L1 davon: Fremdleistungskosten (Materialkosten und bezogene Leistungen) f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                {"ModuleName":"L1","PrimaryKey":"L1_205_1_2018","Col7":205,"Col8":"L1 davon: Sonstige betriebliche Kosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                {"ModuleName":"L1","PrimaryKey":"L1_206_1_2018","Col7":206,"Col8":"L1 davon: Anteilige Abschreibungen f\u00fcr die Erbringung der Leistungen des Moduls (ohne IT-Abschreibungen)","Col9":"","Unit":100},
                {"ModuleName":"L1","PrimaryKey":"L1_207_1_2018","Col7":207,"Col8":"L1 Overheadkosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                {"ModuleName":"L1","PrimaryKey":"L1_301_1_2018","Col7":301,"Col8":"L1 Anzahl Kontakte im pers\u00f6nlichen Kundencenter","Col9":"","Unit":100},
                {"ModuleName":"L1","PrimaryKey":"L1_302_1_2018","Col7":302,"Col8":"L1 Anzahl der permanenten Kundencenter f\u00fcr eine pers\u00f6nliche Kundenbetreuung ","Col9":"","Unit":100},
                {"ModuleName":"L1","PrimaryKey":"L1_303_1_2018","Col7":303,"Col8":"L1 Pflege von Kundenkontaktdaten in einem CRM-System","Col9":"","Unit":100},
                {"ModuleName":"L1","PrimaryKey":"L1_304_1_2018","Col7":304,"Col8":"L1 H\u00f6he der eigenen Mitarbeiterkapazit\u00e4ten","Col9":"","Unit":100},
                {"ModuleName":"L1","PrimaryKey":"L1_305_1_2018","Col7":305,"Col8":"L1 H\u00f6he der fremden Mitarbeiterkapazit\u00e4ten","Col9":"","Unit":100},
                    
                {"ModuleName":"L3","PrimaryKey":"M2_101_1_2018","Col7":101,"Col8":"L3 Durchschnittliche Wartezeit in der Warteschlange (nicht unterbrechbar, kann geroutet werden) pro Kundenkontakt","Col9":"","Unit":100},
                {"ModuleName":"L3","PrimaryKey":"M2_102_1_2018","Col7":102,"Col8":"L3 Anzahl pers\u00f6nlich angenommener Anrufe im Verh\u00e4ltnis zur gesamten Anzahl Anrufe in der Warteschlange","Col9":"","Unit":100},
                {"ModuleName":"L3","PrimaryKey":"M2_103_1_2018","Col7":103,"Col8":"L3 Durchschnittliche Gespr\u00e4chszeit mit dem Kunden","Col9":"","Unit":100},
                {"ModuleName":"L3","PrimaryKey":"M2_203_2_2018","Col7":203,"Col8":"L3 davon: Arbeitnehmer\u00fcberlassungskosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                {"ModuleName":"L3","PrimaryKey":"M2_204_1_2018","Col7":204,"Col8":"L3 davon: Fremdleistungskosten (Materialkosten und bezogene Leistungen) f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                {"ModuleName":"L3","PrimaryKey":"M2_205_1_2018","Col7":205,"Col8":"L3 davon: Sonstige betriebliche Kosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                {"ModuleName":"L3","PrimaryKey":"M2_304_1_2018","Col7":304,"Col8":"L3 Bei Preis je Minute: vorgegebene maximale Gespr\u00e4chszeit","Col9":"","Unit":100},
                {"ModuleName":"L3","PrimaryKey":"M2_305_1_2018","Col7":305,"Col8":"L3 H\u00f6he der eigenen Mitarbeiterkapazit\u00e4ten","Col9":"","Unit":100},
                {"ModuleName":"L3","PrimaryKey":"M2_306_1_2018","Col7":306,"Col8":"L3 H\u00f6he der fremden Mitarbeiterkapazit\u00e4ten","Col9":"","Unit":100},
                    
                {"ModuleName":"L4","PrimaryKey":"M2_103_1_2018","Col7":103,"Col8":"L4 Durchschnittliche Gespr\u00e4chszeit mit dem Kunden","Col9":"","Unit":100},
                {"ModuleName":"L4","PrimaryKey":"M2_203_2_2018","Col7":203,"Col8":"L4 davon: Arbeitnehmer\u00fcberlassungskosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                {"ModuleName":"L4","PrimaryKey":"M2_204_1_2018","Col7":304,"Col8":"L4 davon: Fremdleistungskosten (Materialkosten und bezogene Leistungen) f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                    
                {"ModuleName":"L5","PrimaryKey":"M2_103_1_2018","Col7":103,"Col8":"L5 Durchschnittliche Gespr\u00e4chszeit mit dem Kunden","Col9":"","Unit":100},
                {"ModuleName":"L5","PrimaryKey":"M2_203_2_2018","Col7":203,"Col8":"L5 davon: Arbeitnehmer\u00fcberlassungskosten f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                {"ModuleName":"L5","PrimaryKey":"M2_204_1_2018","Col7":304,"Col8":"L5 davon: Fremdleistungskosten (Materialkosten und bezogene Leistungen) f\u00fcr die Erbringung der Leistungen des Moduls","Col9":"","Unit":100},
                    
                
                ];
               
             /*   finalData=[
                        {"PrimaryKey": "L2_101_1_2018", "Col9": "1"},
                        {"PrimaryKey": "L2_101_1_2018", "Col9": "12"},
                        {"PrimaryKey": "L2_101_1_2018", "Col9": "123"},
                        {"PrimaryKey": "L2_102_1_2018", "Col9": "4"},
                        {"PrimaryKey": "L2_102_1_2018", "Col9": "45"},
                        {"PrimaryKey": "L2_103_1_2018", "Col9": "7"},
                        {"PrimaryKey": "L2_103_1_2018", "Col9": "78"},
                        {"PrimaryKey": "L2_104_1_2018", "Col9": "9"},
                        {"PrimaryKey": "L2_104_1_2018", "Col9": "90"}
                    ];*/
                var uniqueModuleName = new Array();

                //alert(mydata);
                //alert(mydata[0]);

                for(i = 0; i< mydata.length; i++) {    
                    if(uniqueModuleName.indexOf(mydata[i].ModuleName) === -1) {
                        uniqueModuleName.push(mydata[i].ModuleName);        
                        
                    }        
                }
                var buttonWrapper=$('#button-wrapper');
                buttonWrapper.empty();
                var tableWrapper=$('#collapseTable');
                
                    for(var z=0;z<uniqueModuleName.length;z++) {
                        buttonWrapper.append('<button class="btn btn-outline-secondary ubuttonClass" data-toggle="collapse" data-target="#divtable'+uniqueModuleName[z]+'" style="margin-top:5px;margin-left:5px;" id="'+uniqueModuleName[z]+'">'+uniqueModuleName[z]+'</button>');
                        
                        tableWrapper.append(
                            '<div style="border:2px solid #dee2e6;" class="collapse" id="divtable'+uniqueModuleName[z]+'">'
                            
                            
                            +'<div class="container">'
                                        +'<div class="row">'
                                            +'<div class="col-sm-4">'   
                                                +'<input type="button" class="btn btn-primary udiv-button" id="udiv-btn_'+uniqueModuleName[z]+'_1" value="Quality indicators" style="margin: 5px;background-color:#808080;border-color:#909090;"/>'
                                            +'</div>'
                                            +'<div class="col-sm-4">'
                                                +'<input type="button" class="btn btn-primary udiv-button" id="udiv-btn_'+uniqueModuleName[z]+'_2" value="Cost indicators"  style="margin: 5px;;background-color:#808080;border-color:#909090;"/>'
                                            +'</div>'
                                            +'<div class="col-sm-4">'
                                                +'<input type="button" class="btn btn-primary udiv-button" id="udiv-btn_'+uniqueModuleName[z]+'_3" value="Structural key figures"  style="margin: 5px;;background-color:#808080;border-color:#909090;"/>'
                                            +'</div>'
                                        +'</div>'
                                    +'</div>'
                            
                            
                            +'</div>'
                        );
                    }
                    
                    
               

         /*       for(var z=0;z<uniqueModuleName.length;z++) {
                    
                    $('#mainTable').append(
                        '<tr class="utable-row" data-toggle="collapse" style="color:#000;" data-target="#divtable'+uniqueModuleName[z]+'">'
                            +'<td>'+uniqueModuleName[z]+'</td>'
                            
                        +'</tr>'
                        
                        +'<tr>'
                            +'<td colspan="100" class="hiddenRow">'
                                +'<div class="collapse" id="divtable'+uniqueModuleName[z]+'">'
                                    +'<div class="container">'
                                        +'<div class="row">'
                                            +'<div class="col-sm-4">'   
                                                +'<input type="button" class="btn btn-primary udiv-button" id="udiv-btn_'+uniqueModuleName[z]+'_1" value="Quality indicators" style="margin: 5px;background-color:#808080;border-color:#909090;"/>'
                                            +'</div>'
                                            +'<div class="col-sm-4">'
                                                +'<input type="button" class="btn btn-primary udiv-button" id="udiv-btn_'+uniqueModuleName[z]+'_2" value="Cost indicators"  style="margin: 5px;;background-color:#808080;border-color:#909090;"/>'
                                            +'</div>'
                                            +'<div class="col-sm-4">'
                                                +'<input type="button" class="btn btn-primary udiv-button" id="udiv-btn_'+uniqueModuleName[z]+'_3" value="Structural key figures"  style="margin: 5px;;background-color:#808080;border-color:#909090;"/>'
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

                };*/
           
                // Close all other divs
               $('.collapse').on('show.bs.collapse', function () {
                   $('.collapse').collapse('hide');
                   $('#divtable'+ii).find('#dataTable').remove();
               });
                // / Close all other divs
                

                 $('.ubuttonClass').on('click',function() {
                     var buttonTxt=$(this).text();
                     $('#tableHeader').text(buttonTxt+' Section');
                     $('#tableHeader').css('text-align','center');
                     $('#tableHeader').css('font-weight','bold');
                     $('.ubuttonClass').css({'background-color':'#fff','color':'#000'})
                     $(this).css({'background-color':'#6c757d','color':'#fff'});
                })
                



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
                        
                       str1+= '<tbody>'
                                    +'<tr  style="border:0px solid red;">'
                                        
                                            +'<td>'+window['levels_'+ii][k].PrimaryKey+'</td>'
                        
                                            +'<td style="border: 1px solid white;">'+window['levels_'+ii][k].Col7+'</td>'
                        
                        
                                            +'<td style="text-align:left; border: 1px solid white;">'+window['levels_'+ii][k].Col8+'</td>'
                                            
                                            +'<td style="border: 1px solid white;"><input type="text" style="width:100%;text-align:center;" class="myinputClass" name="myinput_'+ii+'_'+jj+'_'+k+'" id="myinput_'+ii+'_'+jj+'_'+k+'" value="'+window['levels_'+ii][k].Col9+'"/></td>'
                            
                                            +'<td style="border: 1px solid white;">'+window['levels_'+ii][k].Unit+'</td>'
                                    +'</tr>'
                            +'</tbody>'
                    }
                    
                    if(((parseInt(window['levels_'+ii][k].Col7) >= 200) && (parseInt(window['levels_'+ii][k].Col7) < 300)) && (jj==2)) {
                        str1+= '<tbody>'
                                    +'<tr  style="border:0px solid red;">'
                                        
                                            +'<td>'+window['levels_'+ii][k].PrimaryKey+'</td>'
                                            +'<td style="border: 1px solid white;">'+window['levels_'+ii][k].Col7+'</td>'
                                            +'<td style="text-align:left; border: 1px solid white;">'+window['levels_'+ii][k].Col8+'</td>'
                                            
                                            +'<td style="border: 1px solid white;"><input type="text" style="width:100%;text-align:center;" class="myinputClass" name="myinput_'+ii+'_'+jj+'_'+k+'" id="myinput_'+ii+'_'+jj+'_'+k+'" value="'+window['levels_'+ii][k].Col9+'"/></td>'
                            
                                            +'<td style="border: 1px solid white;">'+window['levels_'+ii][k].Unit+'</td>'
                                    +'</tr>'
                            +'</tbody>'
                    }
                    if(((parseInt(window['levels_'+ii][k].Col7) >= 300) && (parseInt(window['levels_'+ii][k].Col7) < 400)) && (jj==3)) {
                        str1+= '<tbody>'
                                    +'<tr  style="border:0px solid red;">'
                                        
                                            +'<td>'+window['levels_'+ii][k].PrimaryKey+'</td>'
                                            +'<td style="border: 1px solid white;">'+window['levels_'+ii][k].Col7+'</td>'
                                            +'<td style="text-align:left; border: 1px solid white;">'+window['levels_'+ii][k].Col8+'</td>'
                                            
                                            +'<td style="border: 1px solid white;"><input type="text" style="width:100%;text-align:center;" class="myinputClass" name="myinput_'+ii+'_'+jj+'_'+k+'" id="myinput_'+ii+'_'+jj+'_'+k+'" value="'+window['levels_'+ii][k].Col9+'"/></td>'
                            
                                            +'<td style="border: 1px solid white;">'+window['levels_'+ii][k].Unit+'</td>'
                                    +'</tr>'
                            +'</tbody>'
                    }
                };
                
                            
                    str='<table id="dataTable" class="table table-striped table-bordered table-dark">'
                            +'<thead>'
                                +'<tr>'
                                    +'<th style="border: 1px solid white;">PrimaryKey</th>'
                                    +'<th style="border: 1px solid white;">Q.No.</th>'
                                    +'<th style="text-align:center;border: 1px solid white;width:70%">Question</th>'
                                    +'<th style="border: 1px solid white;text-align:center;">Value</th>'
                                    +'<th style="border: 1px solid white;">Unit</th>'
                                    
                                +'</tr>'
                              +'</thead>'
                                
                                + str1
                              
                        +'</table>';
                  
                    $('#divtable'+ii).append(str);
                    $('#dataTable tr th:nth-child(1)').hide();
                    $('#dataTable tr td:nth-child(1)').hide();
                    $('.uedit-button').css('cursor','pointer')
                    $('.uupdate-button').css('cursor','pointer')
                   
 
                    
                    //var finalData=new Array();
                    //var newFinalData=new Array();
                    
                       
                    $('.myinputClass').on('keyup',function() {
                        var rootref=$(this).parent().parent();
                        pk=rootref.children('td:nth-child(1)').text();
                        //console.log(pk);
                        textVal=$(this).val();
                        //console.log(textVal," :: ",tdVal);
                        var temp="";
                        var temp={
                                "PrimaryKey":pk,
                                "Col9":textVal
                            }
                        finalData.push(temp);
                        console.log(finalData);
                        
                        
                        
                    });
                  
        
                   
                
                
                
                

                })
               
                $('#getNewJson').on('click',function() {
                    newFinalData=finalData
                    console.log("temp :: ",finalData,"  ",newFinalData);
                    for(var i=0;i<newFinalData.length-1;i++) {
                        if(newFinalData[i].PrimaryKey==newFinalData[i+1].PrimaryKey) {
                            newFinalData.splice([i],1);
                        }
                    }
                   console.log(newFinalData);
                   $.ajax({
                            headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                            type:"POST",
                            url:"{{ route('online.store') }}",
                            dataType:"json",
                            data:{PrimaryKey: "L2_101_1_2018", Col9: "2"},
                            success: function( Response ) {
                             console.log(Response);
                                },
                         });
                       
                })
               
            }
        });
        
    </script>
        
        
        
        
	</head>
	<body>
          
        <br/>
        <div class="container-fluid">
            
            <div style="text-align: center;" id="button-wrapper"></div>
            <br/><br/>
            
            <div id="tableHeader" style="color:#000;border: 1px solid #dee2e6;padding: 8px;"><center><b>L Section</b></center></div>
                
            <div id="collapseTable"></div>
            <br/><br/>
            <div><center><button class="btn btn-primary" id="getNewJson">get New Json</button></center></div>
            
        <!--<input type="hidden" name="IDexceldata" class="form-control" id="IDexceldata">-->
        <br />
        <div class="form-group" align="center">
         <input type="hidden" name="action" id="action" value="Add" />
         <input type="hidden" name="hidden_id" id="hidden_id" />
         <input type="submit" name="action_button" id="getNewJson" class="btn btn-warning" value="Add" />
        </div>
            
            
        </div>
	</body>
</html>

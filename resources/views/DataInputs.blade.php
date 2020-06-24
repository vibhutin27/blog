@extends('layouts.app')

@section('content')

<head>   
       <!-- Styles -->
        <style>
    th {
        padding: 10px;
        border: 1px solid white;
        border-collapse: collapse;
        text-align:center;
        background-color:grey;
    }

    td {
        padding: 10px;
        border: 1px solid white;
        border-collapse: collapse;
        text-align:center;
      }
      #fileLoader
        {
            display:none;
        }
        </style>

        <script>
        function openfileDialog() {
                $("#fileLoader").click();
                $('#lefzpath').innerHTML="hi";
        }
        $(document).ready(function(){
          
          function validate(){
                      valid = true;
                      if($("#image_src").val() == ''){
                      // your validation error action
                            valid = false;
                            //alert('Please Select file');
                          }
                          return valid //true or false
                        }  

                        $('#fileform').submit(function(){
                          valid = true;
                          //alert("Submitted");
                          if($("#image_src").val() == ''){
                              // your error validation action
                              valid =  false;
                              alert("Please select file.");
                          }

                          return valid
                      });
                 

        });
        </script>    
</head>
 

<div class="bodydiv">
<form id="fileform" onsubmit="return validate()" action="{{url('excelUpload')}}" method="POST" enctype="multipart/form-data">
@csrf     
            
    <div class="container" style="background-color:#080E1A";>
            <div class="container-fluid main-container" style="border:0px solid red;">
            <div style="border:2px dashed white;border-radius:25px;color:white;margin:20px;padding:20px">


            <B><U>For uploading Data :</U></B><BR/>In this section, you can upload duly filled data. Before uploading file, make sure below checklist is completed for respective file.
            <br/><br/>
            <div style="padding:10px">
            <UL>
              <LI>Data filled in predefined cells only.</LI>
              <LI>No tab added / deleted in file.</LI>
              <LI>Data is filled for respective section in corresponding file only.</LI>
            </UL>
            </div>
            </div>
            
            <div style="border:0px dashed red;border-radius:25px;color:white;margin:20px;padding:20px">
            
        @if (Auth::user()->usertype=="CGSuperUser")    

            <div class="row" style="border:0px solid red">
                <div class="col-xs-3">
                    <label for="class_type"><span class=" label label-primary">You Logged in as <b>{{Auth::user()->name}}</b> and uploading excel template for company   </span></label>
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

            <TABLE>
              <tr>
                <td style="border: 0px solid white;" colspan='2'>
                  <TABLE style="border:0px solid red;padding:15px color:white;">
                    <TR>
                      <th>File Type</th>
                      <th>Browse</th>
                      <th>Path</th>
                      <th>Upload</th>
                    </TR>
                    <TR style="color:white;">
                      <TD>Liefe File</TD>
                      <!--<TD><input type="file" id="fileLoader" name="files" title="Load File" /><button class="btn" id="btnOpenFileDialog" onclick="openfileDialog();"><i class="fa fa-folder" style="color:#fff" aria-hidden="true"></i></button></TD>-->
                      <!--<TD><input type="file" name="file" data-iconName="fa fa-folder"></TD>-->
                      <TD><input type="file" class="filestyle " name="file" id="image_src"  /><i class="fa fa-upload"></i></TD>
                      <!--<TD><input type="file" style="padding:2px;background-color:#080E1A;border:0px solid #080E1A"><i class="fa fa-folder" style="color:#fff"></i></input></TD>-->
                      <TD id='lefzpath' style="width:300px"><p id="filepath"></p>

                        <script>
                          document.getElementById('image_src').onchange = function () {
                            var x = document.getElementById("image_src").files[0].name;
                            document.getElementById("filepath").innerHTML = x;
                          };
                        </script>@if($errors->any())
{{ implode('', $errors->all('<div>:message</div>')) }}
@endif
</TD>
                       <!--<TD><input type="submit"><i class="fa fa-upload"></i></TD>-->
                     <TD><button type="submit" id="fileform" style="padding:2px;background-color:#080E1A;border:0px solid #080E1A"><i class="fa fa-upload" style="color:#fff"></i></button><script>
                       
                       </script></TD>
                      
                      <!--<TD><input type class="fa fa-upload" style="color:#fff" aria-hidden="true" type="submit"></button></TD>-->
                    </TR>
                    <TR style="color:white;">
                      <TD>Netz File</TD>
                      <TD><input type="file" id="fileLoader" name="files" title="Load File" /><button class="btn" id="btnOpenFileDialog" onclick="openfileDialog();"><i class="fa fa-folder" style="color:#fff" aria-hidden="true"></i></button></TD>
                      <TD id='netzzpath' style="width:300px">No file selected</TD>
                      <TD><a href="excelUpload"> <i class="fa fa-upload" style="color:#fff" aria-hidden="true" type="submit"></i></a></TD>
                    </TR>
                  </TABLE>
                </td>
              </TR>
              <TR>
                <td style="border: 0px solid red;">
                  <table class="tftable"  style="border:1px solid red;padding:0px;color:white;width:100%" >
                    <tr><th>Module</th><th>Completion Percentage</th><th>Import </th><th>Last Uploaded By</th></tr>
                    <tr><td>L1</td><td><progress id="file" value="{{ $dataL1per }}" max="100"></progress>{{ $dataL1per }}%</td><td><input type="checkbox" name="L1"  <?php  if (  $dataL1per   == 100 ) echo 'checked="checked"';?>></input></td></tr>
                    <tr><td>L2</td><td><progress id="file" value="{{ $dataL2per }}" max="100"></progress>{{ $dataL2per }}%</td><td><input type="checkbox" name="L2"  <?php  if (  $dataL2per  == 100 ) echo 'checked="checked"';?>></input></td></tr>
                    <tr><td>L3</td><td><progress id="file" value="{{ $dataL3per }}" max="100"></progress>{{ $dataL3per }}%</td><td><input type="checkbox" name="L3"  <?php  if (  $dataL3per   == 100 ) echo 'checked="checked"';?>></input></td></tr>
                    <tr><td>L4</td><td><progress id="file" value="{{ $dataL4per }}" max="100"></progress>{{ $dataL4per }}%</td><td><input type="checkbox" name="L4"  <?php  if (  $dataL4per   == 100 ) echo 'checked="checked"';?>></input></td></tr>
                    <tr><td>L5</td><td><progress id="file" value="{{ $dataL5per }}" max="100"></progress>{{ $dataL5per }}%</td><td><input type="checkbox" name="L5"  <?php  if (  $dataL5per   == 100 ) echo 'checked="checked"';?>></input></td></tr>    
                    </table>
                </td>
                <td style="border: 0px solid white;color:white;"><div style="border:0px solid green;">Import To Database<br/><a href='DataReview' ><i class="fa fa-database" style="color:#fff"></i></a></div></td>
              </TR>
            </TABLE>  


                </div>
            
            </div>
            <div style="text-align:center">
              <a href='DataReview' class="col-sm-3 btn btn-primary" style="margin:2px;margin:0 auto" type="submit">Validate & Preview Data</a>
          <div> 
    </div>
    </form>
    </div>
    @endsection
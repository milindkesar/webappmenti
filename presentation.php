<!DOCTYPE html>
<html>

<head>
  <style>

    .edit{
      display :flex;
      justify-content :center;
      align-items : center;
      
    }
    fieldset {
      width: 80px;
      /* margin-right: 40px; */
    }
    .upload-file{
      /* margin-left : 40px; */
      
    }
    .fontstyle {
      width: 5ex;
      text-align: center;
      padding: 1px 3px;
    }
    [contenteditable=true]:empty:before{
      content: attr(placeholder);
      display: block; 
    }
    div[contenteditable=true] {
      border: 1px dashed #AAA;
      width: 500px;
      height : 200px;
      padding: 5px;
      margin: auto;
    }
  </style>
</head>

<form action="formsub.php" method="post">
<div id="bigsec">
  <br></br>
  <button type="button" onclick="myfunction2()">add question</button>
  <input type="text" id="ques_count" hidden="true" value="0">
</div>
<hr>
<button type="submit">Submit</button>
</form>

<script>
  function myfunction2(){

    var html_text=`<div id="sec`+$('[id^=sec]').length+`">
          <p>Enter question here</p>

          <script>
          var count=document.getElementById('ques_count').value;
          document.getElementById('ques_count').value=count+1;
		  <\/script>

      <div class = "edit">
        <fieldset>
          <button class="fontStyle" onclick="document.execCommand('italic',false,null);" title="Italicize Highlighted Text"><i>I</i>
          </button>
          <button class="fontStyle" onclick="document.execCommand( 'bold',false,null);" title="Bold Highlighted Text"><b>B</b>
          </button>
          <button class="fontStyle" onclick="document.execCommand( 'underline',false,null);"><u>U</u>
          </button>
        </fieldset>
        <div class = "upload-file">
            <label for="myfile">Select a file:</label>
            <input type="file" id="myfile" name="myfile"><br><br>
            
        </div>
      </div>
      <div id="question`+$('[id^=sec]').length+`" name="question`+$('[id^=sec]').length+`" contenteditable = "true" placeholder = "Enter question here ... "> 
      </div>
          

          <br></br>
          <p>Options</p>
          <br></br>
          <button type="button" onclick="option_adder(`+$('[id^=sec]').length+`)">add option</button>
          <br></br>
          <p>Correct Choice</p>
          <input type="text" id="choice`+$('[id^=sec]').length+`" name="choice`+$('[id^=sec]').length+`">
          </div>`

    $("#bigsec").append(html_text);
  }
</script>

<script>
    function option_adder(ques_no){
    var html_var='<input type="text" id="sec'+ques_no+'option'+$('[id^=sec'+ques_no+'option]').length+'" name="sec'+ques_no+'option'+$('[id^=sec'+ques_no+'option]').length+'">'
  $("#sec"+ques_no).append(html_var);
    }
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</html>

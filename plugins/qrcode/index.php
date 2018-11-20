<script src="../plugins/qrcode/qrcode.js"></script>
<style>
  textarea {
        width: 100%;
    border: 1px solid #CECECE;
    resize: none;
    height: 300px;
  }
#qrcode {
  width:160px;
  height:160px;
  margin-top:15px;
}
</style>
<div class='container'>
  <div class='row' style="margin-top: 40px;">
    <div class='col-md-6'>
      <textarea id='textCode' autofocus>Create Your Own QRCode</textarea>
    </div>
    <div class='col-md-6 text-center'>
      <div id="qrcode"></div>
    </div>
  </div>
</div>
<script>
var qrcode = new QRCode("qrcode");

function makeCode () {      
    var elText = document.getElementById("textCode");
    
    if (!elText.value) {
//         alert("Input a text");
//         elText.focus();
        return;
    }
    
    qrcode.makeCode(elText.value);
}

makeCode();

$("#textCode").
    on("blur", function () {
        makeCode();
    }).
    on("keydown", function (e) {
        if (e.keyCode == 13) {
            makeCode();
        }
    });
</script>
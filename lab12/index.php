<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <script>
    var sendajax = function () {
      //Khoi tao doi tuong
      var xhttp = new XMLHttpRequest() || ActiveXObject();
      //Bat su kien thay doi trang thai cuar request
      xhttp.onreadystatechange = function () {
        //Kiem tra neu nhu da gui request thanh cong
        if (this.readyState == 4 && this.status == 200) {
          //In ra data nhan duoc
          addData(this.responseText)
          // this.responseText;
        }
      }
      //cau hinh request
      xhttp.open('GET','data/data.json',true);
      //gui request
      xhttp.send();
    }


    var addData = function (data) {
      //console.log(data);
      console.log(JSON.parse(data));
      //document.getElementById('result').innerText = data;
    }



    sendajax();
    $.ajax({
      url: '/path/to/file',
      type: 'default GET (Other values: POST)',
      dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
      data: {param1: 'value1'},
    })
    .done(function() {
      console.log("success");
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });


  </script>
</head>
<body>

</body>
</html>

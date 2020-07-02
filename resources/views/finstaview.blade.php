<!DOCTYPE html>
<html>
    <head>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
    </head>
    <body>
        <input type="text" name="url" id="url1" placeholder="Type url"/>
        <input type="button" name="submit" id="submit1" value="download"/>
        <div >
            <video id="vid">

            </video>
        </div>
        <div>
            <a id="lk" style="display:none">download file</a>
        </div>
        <script type="text/javascript" src="../js/jquery.min.js">
        $(document).ready(function(){
            $("#submit1").click(function(){
              var url = $("#url1").val();
              $.post('finstavd',{urlin:url},function(retorno){
                  console.log(retorno);
                /*
                if(retorno != null){
                    if(retorno != "invalid URL"){
                        var result = retorno + "&dl=1";
                        var link = document.getElementById("lk");
                        var vdd = document.getElementById("vid");
                        var sourc = document.createElement("source");
                        sourc.src = retorno;
                        vdd.controls = true;
                        vdd.controlsList = "nodownload";
                        vdd.appendChild(sourc);
                        link.href = result;
                        document.getElementById("lk").style.display = "block";
                    }else{
                        alert("invalid URL")
                    }
                }else{
                    alert("invalid URL")
                }
                */
              })      
            })
        })
        </script>
    </body>
</html>

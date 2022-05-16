$(document).ready(
    function(){
        $(function(){
            $("button[name='submit_button']").click(function(){
				$("html, body").animate({ scrollTop: 300 }, "slow");
                $("#response").html('<div class="progress" id="progress"><div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 10%"><span class="sr-only">Loading.....</span></div></div>'),
                    $(".progress-bar").animate({width:"25%"}),$(".progress-bar").animate({width:"55%"}),
                    $.ajax({type:"POST",url:"/reset-vps-process/",
                        data:$("form.submit").serialize(),
                        success:function(a){
                        $(".progress-bar").animate({width:"70%"}),
                            $(".progress-bar").animate({width:"100%"}),
                            $("#response").html(a),
							 $("#form-submit").hide(1000)
                        },error:function(){alert("Something wrong !")}
                    })
            })
        })
          });

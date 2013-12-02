<style>
		#status {
		width:600px;
		height:100px;
		clear:both;
		border:1px solid #00BFFF;
		}
		.tag{
		    background-color:#00BFFF;
		    padding:1px;
		    border-radius:2px;
		    margin-top:2px;
		}
</style>
<script src="http://codeorigin.jquery.com/jquery-1.10.2.min.js" type="text/javascript" /></script>
		
<div name="status" id="status"></div>
<div id="suggest"></div>

<script>
        $("#status").prop('contentEditable',true);
		var prev_matches;
		var current_match;
		$( document).on( "click","#suggest > div", function() {
		                
		                var text = $("#status").html();
		                var tagged = "<a href='#' class='tag'>"+$(this).html()+"</a>"
		                var rep = text.replace(current_match,tagged)
		                $("#status").html(rep);
                        console.log($("#status").html());
            });
        $("#status").keydown(function(e){
        if(e.keyCode == 32){
		     $("#suggest").html("");
		    }
        });
		$( "#status" ).keyup(function(e) {
		    
		    var text = $(this).html();
		    
		    var matches = text.match(/@[a-zA-Z1-9]*/g);
		    for(var match in matches) {
    		    if(prev_matches != null){
    		       if($.inArray(matches[match],prev_matches) == -1){
    		            current_match = matches[match];
    		            console.log(matches[match]);
    		            $("#suggest").html("");
    		            
                        $.ajax({
                            url: "mention_post.php",
                            type: 'POST',
                            cache: false,
                            data : {name:matches[match]},
                            timeout: 30000,
                            error: function(){
                                return true;
                            },
                            success: function(data){ 
                                var arr = $.parseJSON(data);
                                $.each(arr, function (index, value) {
                                            $("#suggest").append("<div class='name'>"+value+"</div>");
                                        });
                            }
                        });
    		       }
    		       }
		    }
		    prev_matches = matches;
		    
            //console.log(text);
        });
        
</script>
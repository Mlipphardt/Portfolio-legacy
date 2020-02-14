$(document).ready(function(){
   $("#banner").addClass("visible");
});

$(document).on("scroll", function () {
    var pageTop = $(document).scrollTop()
    console.log(pageTop);
    var pageBottom = pageTop + $(window).height()
    var tags = $("div") 

    for (let i = 0; i < tags.length; i++) {
        let tag = tags[i];
        if ($(tag).position().top < pageBottom) { 
            $(tag).addClass("visible")
          }
        else {
        $(tag).removeClass("visible")
        }        
    }
    
})

    

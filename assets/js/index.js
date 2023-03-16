setTimeout(function(){
    $('.loader').fadeToggle();
}, 1500);

$("a[href='#top']").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
});


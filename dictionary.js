$('#search').on('click', function(){
    //alert('clicked');
    let term = $('#terms').val();
    //alert(term);
    //$('#output').html("hello");
    $.post("dictionary.php", {term: term}, function(result){
        $("#output").html("<strong>"+term+":</strong> "+result);
    })
});
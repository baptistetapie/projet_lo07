var liste=[
        {value:'français', label:'français', desc:'français'},
        {value:'anglais', label:'anglais', desc:'anglais'},
        "allemand",
        "russe",
        "espagnol",
        "portuguais",
        "américain",
        "chinois",
        "japonais"
    ]; 
    
    $('#langue').autocomplete({
    source : liste,
    minLength : 2, // on indique qu'il faut taper au moins 3 caractères pour afficher l'autocomplétion
    position : {
        my : 'bottom',
        at : 'top'
    }, // ici, ma liste se placera au-dessus et à l'extérieur de mon champ de texte.
    select : function(event, ui){
        $('#description').val( ui.item.desc ); // lance une alerte indiquant la valeur de la proposition
    }

});

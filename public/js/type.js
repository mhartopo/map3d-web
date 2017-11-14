jQuery(document).ready( function($) {
  var engine = new Bloodhound({
    remote : {
      url: '/api/owners/find?q=%QUERY%',
      wildcard: '%QUERY%'
    },
    datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
    queryTokenizer: Bloodhound.tokenizers.whitespace
  }); 
  $(".search-input").typeahead({
    hint: true,
    highlight: true,
    minLength: 1  
  },{
    source: engine.ttAdapter(),
    name: 'owner-list',
    templates: {
      empty: [
        '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
      ],
      header: [
        '<div class="list-group search-results-dropdown">'
      ],
      suggestion: function(data) {
        return '<a href="#" class="list-group-item">' + data + '</a>'
      }
    }
  });
  
});
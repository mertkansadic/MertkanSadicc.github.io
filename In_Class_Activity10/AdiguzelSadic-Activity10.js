$(document).ready(function() {
    
    $("#birthday").datepicker();
  
    
    var programmingLanguages = [
      "ActionScript", "AppleScript", "Asp", "BASIC", "C", "C++", "Clojure",
      "COBOL", "ColdFusion", "Erlang", "Fortran", "Groovy", "Haskell", "Java",
      "JavaScript", "Lisp", "Perl", "PHP", "Python", "Ruby", "Scala", "Scheme",
      "Swift", "TypeScript", "Visual Basic"
    ];
    $("#language").autocomplete({
      source: programmingLanguages
    });
  
    
    var cities = [
      "Charlotte", "New York", "Washington DC", "Los Angeles", "Chicago",
      "Houston", "Phoenix", "San Diego", "Dallas", "San Jose"
    ];
    $("#city").autocomplete({
      source: cities
    });
  });
  
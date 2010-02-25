lexer grammar t011lexer;
options {
  language = Php;
}

IDENTIFIER: 
        ('a'..'z'|'A'..'Z'|'_') 
        ('a'..'z'
        |'A'..'Z'
        |'0'..'9'
        |'_'
            { 
				global \$ctr;
				\$ctr++;
            }
        )*
    ;

WS: (' ' | '\n')+;

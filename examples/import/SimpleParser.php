<?php
// $ANTLR 3.1.3 ??? 27, 2009 18:08:14 Simple.g 2009-04-27 21:20:21


# for convenience in actions
if (!defined('HIDDEN')) define('HIDDEN', BaseRecognizer::$HIDDEN);

class SimpleParser extends AntlrParser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "ID", "INT", "FLOAT", "ESC", "CHAR", "STRING", "COMMENT", "LINE_COMMENT", "WS", "'program'", "';'", "'var'", "'='"
    );
    public $WS=12;
    public $T__16=16;
    public $T__15=15;
    public $LINE_COMMENT=11;
    public $T__14=14;
    public $ESC=7;
    public $T__13=13;
    public $CHAR=8;
    public $FLOAT=6;
    public $INT=5;
    public $COMMENT=10;
    public $ID=4;
    public $EOF=-1;
    public $STRING=9;

    // delegates
    // delegators

    
    static $FOLLOW_13_in_file32;
    static $FOLLOW_ID_in_file34;
    static $FOLLOW_14_in_file36;
    static $FOLLOW_decl_in_file47;
    static $FOLLOW_15_in_decl62;
    static $FOLLOW_ID_in_decl64;
    static $FOLLOW_16_in_decl67;
    static $FOLLOW_expr_in_decl69;
    static $FOLLOW_14_in_decl73;
    static $FOLLOW_set_in_expr0;

    
    

        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);
             
            
            
        }
        

    public function getTokenNames() { return SimpleParser::$tokenNames; }
    public function getGrammarFileName() { return "Simple.g"; }



    // $ANTLR start "file"
    // Simple.g:10:1: file : 'program' ID ';' ( decl )+ ; 
    public function file(){
        $ID1=null;

        try {
            // Simple.g:10:6: ( 'program' ID ';' ( decl )+ ) 
            // Simple.g:10:8: 'program' ID ';' ( decl )+ 
            {
            $this->match($this->input,$this->getToken('13'),self::$FOLLOW_13_in_file32); 
            $ID1=$this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_file34); 
            $this->match($this->input,$this->getToken('14'),self::$FOLLOW_14_in_file36); 
              System.out.println("found program "+($ID1!=null?$ID1->getText():null));
            // Simple.g:11:8: ( decl )+ 
            $cnt1=0;
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( ($LA1_0==$this->getToken('15')) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // Simple.g:11:8: decl 
            	    {
            	    $this->pushFollow(self::$FOLLOW_decl_in_file47);
            	    $this->decl();

            	    $this->state->_fsp--;


            	    }
            	    break;

            	default :
            	    if ( $cnt1 >= 1 ) break 2;//loop1;
                        $eee =
                            new EarlyExitException(1, $this->input);
                        throw $eee;
                }
                $cnt1++;
            } while (true);


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }
        
        return ;
    }
    // $ANTLR end "file"


    // $ANTLR start "decl"
    // Simple.g:14:1: decl : 'var' ID ( '=' expr )? ';' ; 
    public function decl(){
        $ID2=null;

        try {
            // Simple.g:14:6: ( 'var' ID ( '=' expr )? ';' ) 
            // Simple.g:14:8: 'var' ID ( '=' expr )? ';' 
            {
            $this->match($this->input,$this->getToken('15'),self::$FOLLOW_15_in_decl62); 
            $ID2=$this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_decl64); 
            // Simple.g:14:17: ( '=' expr )? 
            $alt2=2;
            $LA2_0 = $this->input->LA(1);

            if ( ($LA2_0==$this->getToken('16')) ) {
                $alt2=1;
            }
            switch ($alt2) {
                case 1 :
                    // Simple.g:14:18: '=' expr 
                    {
                    $this->match($this->input,$this->getToken('16'),self::$FOLLOW_16_in_decl67); 
                    $this->pushFollow(self::$FOLLOW_expr_in_decl69);
                    $this->expr();

                    $this->state->_fsp--;


                    }
                    break;

            }

            $this->match($this->input,$this->getToken('14'),self::$FOLLOW_14_in_decl73); 
              System.out.println("found var "+($ID2!=null?$ID2->getText():null));

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }
        
        return ;
    }
    // $ANTLR end "decl"


    // $ANTLR start "expr"
    // Simple.g:18:1: expr : ( INT | FLOAT ); 
    public function expr(){
        try {
            // Simple.g:18:6: ( INT | FLOAT ) 
            // Simple.g: 
            {
            if ( ($this->input->LA(1)>=INT && $this->input->LA(1)<=FLOAT) ) {
                $this->input->consume();
                $this->state->errorRecovery=false;
            }
            else {
                $mse = new MismatchedSetException(null,$this->input);
                throw mse;
            }


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }
        
        return ;
    }
    // $ANTLR end "expr"

    // Delegated rules


    
}

 



SimpleParser::$FOLLOW_13_in_file32 = new Set(array(4));
SimpleParser::$FOLLOW_ID_in_file34 = new Set(array(14));
SimpleParser::$FOLLOW_14_in_file36 = new Set(array(15));
SimpleParser::$FOLLOW_decl_in_file47 = new Set(array(1, 15));
SimpleParser::$FOLLOW_15_in_decl62 = new Set(array(4));
SimpleParser::$FOLLOW_ID_in_decl64 = new Set(array(14, 16));
SimpleParser::$FOLLOW_16_in_decl67 = new Set(array(5, 6));
SimpleParser::$FOLLOW_expr_in_decl69 = new Set(array(14));
SimpleParser::$FOLLOW_14_in_decl73 = new Set(array(1));
SimpleParser::$FOLLOW_set_in_expr0 = new Set(array(1));

?>
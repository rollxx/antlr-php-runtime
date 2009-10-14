<?php

	class CommonToken implements Token {

		/*	public CommonToken(int type) {
			$this->type = type;
		}
		*/
		public function __construct($input=null, $type, $channel=0, $start=0, $stop=0) {
			$this->charPositionInLine=-1;
			$this->input = $input;
			$this->type = $type;
			$this->channel = $channel;
			$this->start = $start;
			$this->stop = $stop;
		}
		
		public static function forType($type){
			return new CommonToken($input=null, $type);
		}
		/*
		public CommonToken(int type, String text) {
			$this->type = type;
			$this->channel = DEFAULT_CHANNEL;
			$this->text = text;
		}

		public CommonToken(Token oldToken) {
			text = oldToken.getText();
			type = oldToken.getType();
			line = oldToken.getLine();
			index = oldToken.getTokenIndex();
			charPositionInLine = oldToken.getCharPositionInLine();
			channel = oldToken.getChannel();
			if ( oldToken instanceof CommonToken ) {
				start = ((CommonToken)oldToken).start;
				stop = ((CommonToken)oldToken).stop;
			}
		}
		*/
		public function getType() {
			return $this->type;
		}

		public function setLine($line) {
			$this->line = $this->line;
		}

		public function getText() {
			if ( $this->text!=null ) {
				return $this->text;
			}
			if ( $this->input==null ) {
				return null;
			}
			$this->text = $this->input->substring($this->start,$this->stop);
			return $this->text;
		}

		/** Override the text for this token.  getText() will return this text
		 *  rather than pulling from the buffer.  Note that this does not mean
		 *  that start/stop indexes are not valid.  It means that that input
		 *  was converted to a new string in the token object.
		 */
		public function setText($text) {
			$this->text = $this->text;
		}

		public function getLine() {
			return $this->line;
		}

		public function getCharPositionInLine() {
			return $this->charPositionInLine;
		}

		public function setCharPositionInLine($charPositionInLine) {
			$this->charPositionInLine = $this->charPositionInLine;
		}

		public function getChannel() {
			return $this->channel;
		}

		public function setChannel($channel) {
			$this->channel = $this->channel;
		}

		public function setType($type) {
			$this->type = $this->type;
		}

		public function getStartIndex() {
			return $this->start;
		}

		public function setStartIndex($start) {
			$this->start = $this->start;
		}

		public function getStopIndex() {
			return $this->stop;
		}

		public function setStopIndex($stop) {
			$this->stop = $this->stop;
		}

		public function getTokenIndex() {
			return $this->index;
		}

		public function setTokenIndex($index) {
			$this->index = $this->index;
		}

		public function getInputStream() {
			return $this->input;
		}

		public function setInputStream($input) {
			$this->input = $this->input;
		}

		public function toString() {
			$channelStr = "";
			if ( $this->channel>0 ) {
				$channelStr=",channel=".$this->channel;
			}
			$txt = $this->getText();
			if ( $txt!=null ) {
				$txt = str_replace("\n",'\n', $txt);
				$txt = str_replace("\r",'\r', $txt);
				$txt = str_replace("\t",'\t', $txt);
			}
			else {
				$txt = "<no text>";
			}
			return "[@".$this->getTokenIndex().",".$this->start.":".$this->stop."='".$txt."',<".$this->type.">".$channelStr.",".$this->line.":".$this->getCharPositionInLine()."]";
		}
		
		public function __toString(){
			return $this->toString();
		}
	}
	
?>

<?php



class Dice {
    private  $faces;
    private  $freqs = array();
    private  $result = array();
    private  $bias;
    private $i = 0;
    // Constructor
    public function __construct($faces,$bias) {
        $this->faces = $faces;
        $this->bias = $bias;
    }
    
    public function cast() {

        if($this->bias === null){
            $res = rand(1,$this->faces);
            $this->result[$this->i++] = $res;
            $this->freqs[$res]++; # in the very first time freqs[2] is 0+1=1, if nex time freqs[2], so it will be 1+1=2;
            return $res;
        # if bias is 1 then faces = rand(1,6), if bias 0.4 then rand(1,(1 + 6*0.4));
        }else {
            $res1 = rand(1, ($this->faces * (1 + $this->bias)));
            $bias2 = (1 - $this->bias)/($this->faces - 1);
            $res2 = rand(1,(($this->faces - 1) * (1 + $bias2)));
            if ($res1 ==  $this->faces) {
                $this->result[$this->i++] = $res1;
                $this->freqs[$res1]++;
                return $res1;
            }
            else {
                $this->result[$this->i++] = $res2;
                $this->freqs[$res2]++;
                return $res2;
            }

        }


    }
    public function getFreq($eyes) {
        $freq = $this->freqs[$eyes];
        if ($freq=="")
            $freq = 0;
        return $freq;
    }
    public function average()  {

        $avg = array_sum($this->result) / count($this->result);
        return $avg;
    }

}
class PhysicalDice extends Dice {

    private $material;

    public function __construct($material) {
        $this->material = $material;

    }
    public function info() {

        return $this->material;
    }

}
?>
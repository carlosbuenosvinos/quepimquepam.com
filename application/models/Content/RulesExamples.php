<?php
class Content_RulesExamples 
{
    const EXAMPLE_1 = 1;
    const EXAMPLE_2 = 2;
    const EXAMPLE_3 = 3;
    const EXAMPLE_4 = 4;
    const EXAMPLE_5 = 5;
    const EXAMPLE_6 = 6;
    
    public static function getExample($pId) {
        $result = '';
        switch ($pId) {
            case self::EXAMPLE_1:
                $squares = array();
                $squares[1][1] = 1;
                $squares[1][2] = 1;
                $squares[1][3] = 1;
                $squares[3][4] = 1;
                $squares[4][4] = 1;
                $result = self::_renderExample($squares);
                break;
            case self::EXAMPLE_2:
                $squares = array();
                $squares[1][1] = 1;
                $squares[1][2] = 1;
                $squares[1][3] = 1;
                $squares[2][4] = 1;
                $squares[3][4] = 1;
                $result = self::_renderExample($squares);
                break;
            case self::EXAMPLE_3:
                $result = self::_renderExample(array(), 9, 9);
                break;
            case self::EXAMPLE_4:
                $squares = array();
                $squares[1][1] = 1;
                $squares[1][2] = 1;
                $squares[1][3] = 1;
                $squares[1][4] = 1;
                $squares[3][2] = 1;
                $squares[4][2] = 1;
                $result = self::_renderExample($squares);
                break;
            case self::EXAMPLE_5:
                $squares = array();
                $squares[1][1] = 1;
                $squares[1][2] = 1;
                $squares[1][3] = 1;
                $squares[1][4] = 1;
                $squares[3][1] = 1;
                $squares[4][2] = 1;
                $result = self::_renderExample($squares);
                break;
            case self::EXAMPLE_6:
                $result = self::_renderExample();
                break;
        }
        
        return $result;
    }
    
    private static function _renderExample($pMap = array(), $w = 5, $h = 5) {
        $out = '<table class="set-viewer-board">';
        $out .= '<tr>';
        $out .= '<td></td>';
        $letras = range(0, $w);
        foreach($letras as $letra) {
            $out .= '<td style="text-align: center;">' . $letra . '</td>';
        }
        $out .= '</tr>';
        
        for($i = 0; $i <= $h; $i++) {
            $out .= '<tr>';
            $out .= '<td>' . $i . '</td>';
            for($j = 0; $j <= $w; $j++) {
                if(empty($pMap[$j][$i])) {
                    $out .= '<td style="background-color: Blue;"></td>';
                } else {
                    $out .= '<td style="background-color: Grey;"></td>';
                }
            }
            $out .= '</tr>';
        }
        
        $out .= '</table>';
        return $out;
    }
}

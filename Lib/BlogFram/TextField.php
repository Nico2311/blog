<?php

namespace BlogFram;

class TextField extends Field
{
    protected $cols;
    protected $rows;

    public function buildWidget()
    {
        $widget = '';

        if (!empty($this->errorMessage))
        {
            $widget .= $this->errorMessage.'<br />';
        }

        $widget .= '<label>'.$this->label.'</label>
                   <div id="borderNew"><input type="button" value="G" style="font-weight:bold;" onclick="commande(\'bold\');"/>
                    <input type="button" value="I" style="font-style:italic;" onclick="commande(\'italic\');"/>
                    <input type="button" value="S" style="text-decoration:underline;" onclick="commande(\'underline\');"/></div>   
                    <div id="editeur" contentEditable name="'.$this->name.'"';

        if (!empty($this->cols))
        {
            $widget .= ' cols="'.$this->cols.'"';
        }

        if (!empty($this->rows))
        {
            $widget .= ' rows="'.$this->rows.'"';
        }

        $widget .= '>';

        if (!empty($this->value))
        {
            $widget .= htmlspecialchars($this->value);
        }

        return $widget.'</div>';
    }

    public function setCols($cols)
    {
        $cols = (int) $cols;

        if ($cols > 0)
        {
            $this->cols = $cols;
        }
    }

    public function setRows($rows)

    {
        $rows = (int) $rows;

        if ($rows > 0)
        {
            $this->rows = $rows;
        }
    }
}
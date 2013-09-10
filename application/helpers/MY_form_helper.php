<?php
	
function MY_form_open($action)
{
    
    $form = form_open($action, array('class' => 'form-horizontal'));
    return $form;
}

function MY_form_datepicker($label, $name, $span, $required = TRUE)
{
    if ( $required === TRUE ){
        $req = 'required="required"';
    }else{
        $req = null;
    }

    $form = '
													<div class="row-fluid">
														<label for="'.$name.'">'.$label.'</label>
													</div>

													<div class="control-group">
														<div class="row-fluid input-append">
															<input class="span'.$span.' date-picker" id="'.$name.'" name="'.$name.'" type="text" data-date-format="dd/mm/yyyy" '.$req.' />
															<span class="add-on">
																<i class="icon-calendar"></i>
															</span>
														</div>
													</div>
';
    
    return $form;


}

function MY_form_datepicker_range($label, $name, $span, $required = TRUE)
{
    
    if ( $required === TRUE ){
        $req = 'required="required"';
    }else{
        $req = null;
    }
    
    $form = 
    '
                                    <div class="row-fluid">
                                        <label for="'.$name.'">'.$label.'</label>
                                    </div>
                                    
                                    <div class="control-group">
                                        <div class="row-fluid input-prepend">
                                            <span class="add-on">
                                                <i class="icon-calendar"></i>
                                            </span>
                                            
                                            <input class="span'.$span.'" type="text" name="'.$name.'" id="'.$name.'" '.$req.' />
                                        </div>
                                    </div>
    ';
    
    return $form;
}

function MY_form_submit()
{
    $form = '
                                    <div class="form-actions">
    									<button class="btn btn-info" type="submit">
    										<i class="icon-ok bigger-110"></i>
    										Submit
    									</button>
    
    									&nbsp; &nbsp; &nbsp;
    									<button class="btn" type="reset">
    										<i class="icon-undo bigger-110"></i>
    										Reset
    									</button>
								    </div>
            ';
            
    return $form;
    
}
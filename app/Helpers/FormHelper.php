<?php

/***********************************************************************************************************************
 *                                      Form helpers
 ***********************************************************************************************************************/

function btnDeleteConfirm($actionUrl, $id, $disabled = false)
{
    if ($disabled == true) {
        $disabled = ' disabled';
    }

    $markup = '<form method="POST" action="' . backendUrl($actionUrl . '/' . $id)
        . '" accept-charset="UTF-8" class="form-inline">';
    $markup .= csrf_field();
    $markup .= '<input name="_method" type="hidden" value="DELETE">';
    $markup .= '<button' . $disabled . ' type="submit" class="btn btn-danger btn-sm btn-mini'
        . '" style="background-color: transparent !important;color: #E36E60;margin-top: -2px;">
                <span style="color: red; font-size: 14px;">Confirm</span>
                </button>';
    $markup .= '</form>';

    return $markup;

}

function btnDelete()
{
    $markup = '<button type="button" class="btn btn-danger btn-sm delete btn-mini"
               data-toggle="modal" data-placement="top" data-target="#delete"
               style="background-color: transparent !important; color: #E36E60;">
               <i class="fa fa-remove"></i>
               </button>';
    return $markup;
}

function modalDeleteBox($btnDeleteConfirm)
{
    $markup = '<div class="modal fade" id="delete" role="dialog">
               <div class="modal-dialog">
                   <!-- Modal content-->
                   <div class="modal-content">
                        <div class="" style="padding: 40px 0 20px;">
                             <h4 class="modal-title text-center" style="color: red;font-weight: 300;">Deletion confirm!!</h4>
                        </div>
                   <div class="modal-body text-center" style="padding: 10px 0 60px;">
                        <h4 style="font-weight: 300;">You are about to delete this data.</h4>
                        <h4 style="font-weight: 300;">Are you sure?</h4>
                        <input type="hidden" name="dep_id" id="dep_id" value="">
                   </div>
                   <div class="modal-footer">
                         <button type="button" class="btn btn-default text-center" data-dismiss="modal">Cancel</button>
                         ' . $btnDeleteConfirm . '
                   </div>
                   </div>
               </div>
               </div>';
    return $markup;

}

function btnToDelete($actionUrl, $id, $disabled = false)
{
    if ($disabled == true) {
        $disabled = ' disabled';
    }

    $markup = '<form method="POST" action="' . backendUrl($actionUrl . '/' . $id)
        . '" accept-charset="UTF-8" class="form-inline" id="formDelete' . $id . '">';
    $markup .= csrf_field();
    $markup .= '<input name="_method" type="hidden" value="DELETE">';
    $markup .= '<button' . $disabled . ' type="submit" class="btn btn-danger btn-sm btn-mini'
        . btnDeleteHtmlClass() . $disabled . '" id="btnSubmitDelete' . $id . '"
        data-toggle="tooltip" data-placement="top" title="Delete" style="background-color: transparent !important;
    color: #E36E60;">
                <i class="fa fa-remove"></i>
                </button>';
    $markup .= '</form>';

    return $markup;

}

function btnToCreate($actionUrl, $btnText, $autoComplete = true)
{
    $markup = '<a href="' . backendUrl($actionUrl . ($autoComplete ? '/create' : ''))
        . '" class="btn btn-primary btn-fill btn-with-icon pull-right ' . btnToCreateHtmlClass() . '">';
    $markup .= '<i class="pe-7s-plus"></i> <p>' . $btnText . '</p>';
    $markup .= '</a>';

    return $markup;
}

function btnToEdit($actionUrl, $param = false)
{
    if ($param) {
        $url = backendUrl($actionUrl . '/' . $param . '/edit');
    } else {
        $url = backendUrl($actionUrl);
    }

    $markup = '<a  href="' . $url . '" class="btn btn-primary btn-sm btn-mini' . btnToEditHtmlClass() . '" 
               id="custom_btn" data-toggle="tooltip" data-placement="top" title="Edit">';
    $markup .= '<i class="fa fa-pencil"></i>';
    $markup .= '</a>';

    return $markup;
}

function btnSubmitCreateHtmlId()
{
    return 'btnSubmitCreate';
}

function btnSubmitEditHtmlId()
{
    return 'btnSubmitEdit';
}

function btnSubmitCreate($text = 'Create')
{
    return '<button type="submit" class="btn btn-primary btn-fill pull-right m-left-5" id="' . btnSubmitCreateHtmlId() . '">' . $text . '</button>';
}

function btnSubmitEdit($text = 'Update')
{
    return '<button type="submit" class="btn btn-info btn-fill pull-right m-left-5" id="' . btnSubmitEditHtmlId() . '">' . $text . '</button>';
}

function formEditHtmlId()
{
    return 'formEdit';
}

function btnToCreateHtmlClass()
{
    return 'btnToCreate';
}

function btnDeleteHtmlClass()
{
    return 'btnDelete';
}

function btnToEditHtmlClass()
{
    return 'btnToEdit';
}

function formCreateHtmlId()
{
    return 'formCreate';
}

function openFormCreate($actionUrl, $arrAttributes = [], $class = '')
{
    $markup = '<form role="form" method="POST" action="' . backendUrl($actionUrl) . '" id=' . formCreateHtmlId() . ' class="' . $class . '">';
    $markup .= csrf_field();

    return $markup;
}

function openFormEdit($actionUrl, $param, $defaultUrl = true, $class = '')
{
    $markup = '<form method="POST" action="' . backendUrl($defaultUrl ? ($actionUrl . '/' . $param) : $actionUrl) . '" accept-charset="UTF-8" id=' . formEditHtmlId() . ' enctype="multipart/form-data" class="' . $class . '">';
    $markup .= '<input name="_method" type="hidden" value="PATCH">';
    $markup .= csrf_field();

    return $markup;
}

function openFormUploadCreate($actionUrl)
{
    $markup = '<form role="form" method="POST" action="' . backendUrl($actionUrl) . '" id=' . formCreateHtmlId() . ' enctype="multipart/form-data">';
    $markup .= csrf_field();

    return $markup;
}

function openFormUploadEdit($actionUrl, $param, $defaultUrl = true, $class = '')
{
    $markup = '<form method="POST" action="' . backendUrl($defaultUrl ? ($actionUrl . '/' . $param) : $actionUrl) . '" accept-charset="UTF-8" id=' . formEditHtmlId() . ' enctype="multipart/form-data" class="' . $class . '">';
    $markup .= '<input name="_method" type="hidden" value="PATCH">';
    $markup .= csrf_field();

    return $markup;
}

function closeForm()
{
    return '</form>';
}

function formCreateFooter($action, $btnText = "Create")
{
    $markup = '<footer class="form-fixed-footer">';
    $markup .= '<div class="container-fluid">';
    $markup .= '<a href="' . backendUrl($action) . '" class="btn btn-danger btn-fill pull-right">Cancel</a>';
    $markup .= btnSubmitCreate($btnText);
    $markup .= '</div>';
    $markup .= '</footer>';

    return $markup;
}

function formEditFooter($action, $moreButtons = [])
{
    $markup = '<footer class="form-fixed-footer">';
    $markup .= '<div class="container-fluid">';
    $markup .= btnSubmitEdit();
    $markup .= '<a href="' . backendUrl($action) . '" class="btn btn-danger btn-fill pull-right m-left-5">Cancel</a> ';

    if (count($moreButtons) > 0) {
        foreach ($moreButtons as $moreButton) {
            $markup .= $moreButton;
        }
    }

    $markup .= '</div>';
    $markup .= '</footer>';

    return $markup;
}

function formError($error)
{
    return '<div class="input-error-message">' . $error . '&nbsp;</div>';
}

function formErrorInline($error)
{
    return '<span class="input-error-message">' . $error . '&nbsp;</span>';
}

function buttonChooseIcon($inputName, $value = '')
{
    $markup = '<div class="icon-control">';
    $markup .= '<input type="hidden" name="' . $inputName . '" class="form-control" value="' . $value . '">';
    $markup .= '<button type="button" class="btn btn-default form-control choose-icon" data-toggle="modal" data-target="#iconModal">';
    if ($value) {
        $markup .= '<span class="icon ' . $value . '"></span><span>' . $value . '</span>';
    } else {
        $markup .= 'Click to choose an icon';
    }

    $markup .= '</button>';
    $markup .= '</div>';

    return $markup;
}

function textEditor($name, $value = null)
{
    return '<textarea class="textEditor" name="' . $name . '">' . $value . '</textarea>';
}

//Alert message function

function popUpMessage()
{
    $isSessionMessage = Session::has('message');

    $test = Session::has('message_type') == "warning";
    if ($test == "warning") {
        $alert_type = "alert-warning";
    } else {
        $alert_type = "alert-info";
    }

    if ($isSessionMessage) {
        $markup = '<div class="alert ' . $alert_type . ' alert-dismissible" id="success-alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" id="alert-dismiss">
                        <span style="padding: 5px;">&times</span>
                    </a> ';
        $markup .= session('message');
        $markup .= '</div>';

        return $markup;
    }


}

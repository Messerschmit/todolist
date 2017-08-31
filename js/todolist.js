$(document).ready(function () {

  var element_event = 'input[type="checkbox"]',
      element_action = 'label';

  strike_out_task(element_event, element_action);

});

/**
 * Меняет оформление для выполненной задачи
 *
 * @param {object} element_event элемент событие которого отслеживается
 * @param {object} element_action элемент над которым осуществляются изменения
 * @return {boolean} true.
 */
function strike_out_task(element_event, element_action) {

  $(element_event).bind("click",function () {

    var attr = $(this).attr("name"),
        new_element_action = $(element_action + '[for="'+ attr +'"]');

      if ( $(this).prop("checked") ){
          $(new_element_action).css({
            "text-decoration" : "line-through",
            "color" : "#C1BEBE"
          });
      } else {
          $(new_element_action).css({
            "text-decoration" : "none",
            "color" : "inherit"
          });
      };
  });
};

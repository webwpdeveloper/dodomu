//*==============
//*  Inputs     =
//*==============
//*  Inputmask  =
//*==============
//*  Select     =
//*==============
//*  Calendar   =
//*==============

jQuery(function ($) {
  "use strict";
  $(document).on("click", "[disabled], .disabled", function (e) {
    e.preventDefault();
  });

  //*==============
  //*  Inputs     =
  //*==============
  $(document).on('focus', '.input-field .input, .input-button-wrap .input', function () {
    $(this).closest('.input-field').addClass('focus');
  });
  $(document).on('blur', '.input-field .input, .input-button-wrap .input', function () {
    $(this).closest('.input-field').removeClass('focus');
  });
  $(document).on('keyup', '.input-field .input', function () {
    if ($(this).val()) $(this).closest('.input-field').addClass('value');
    else $(this).closest('.input-field').removeClass('value');
  });


  // Invalid Input
  $(document).on('blur', '.input-field .input[required]', function () {
    if ($(this).val().trim()) {
      $(this).closest('.input-field').removeClass('invalid');
    } else {
      $(this).closest('.input-field').addClass('invalid');
    }
  });


  // Check if input has value or autofill
  $(document).ready(function () {
    $('.input-field .input').each(function () {
      let th = $(this);
      if (th.val()) {
        th.closest('.input-field').addClass('value');
      }
    });

    $('.input-field .input:-webkit-autofill').each(function () {
      let th = $(this);

      th.closest('.input-field').addClass('value');
    });
  });


  // Validate email
  _functions.validateEmail = function (email) {
    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }

  $(document).on('keyup', 'input[type="email"]', function () {
    const email = $(this);

    if (!_functions.validateEmail(email.val())) {
      email.closest('.input-field').addClass('invalid-email');
    } else {
      email.closest('.input-field').removeClass('invalid-email');
    }

    if (email.val() == '') {
      email.closest('.input-field').removeClass('invalid-email');
    }
  });


  // Password Hide/Show
  $(document).on('click', '.password-control', function () {
    let thisInput = $(this).siblings('.input');

    if (thisInput.attr('type') == 'password') {
      $(this).addClass('view');
      thisInput.attr('type', 'text');
    } else {
      $(this).removeClass('view');
      thisInput.attr('type', 'password');
    }
    return false;
  });


  //*==============
  //*  Inputmask  =
  //*==============
  _functions.initMask = function () {
    if ($('.input[type="tel"]').length) {
      $('.input[type="tel"]').inputmask({
        mask: "+380 (99) 999 99 99",
        placeholder: "_",
        showMaskOnHover: false,
        showMaskOnFocus: true,
        definitions: {
          '9': {
            validator: "[0-9]"
          }
        }
      });
    }

    // input tel with select code country
    $('.input.select-tel[type="tel"]').inputmask({
      "mask": "99 999 99 99",
      "placeholder": "_",
      showMaskOnHover: false,
      showMaskOnFocus: true,
      definitions: {
        '9': {
          validator: "[0-9]"
        }
      }
    });

    if ($('.input.code-mask').length) {
      $('.input.code-mask').inputmask({
        "mask": "9 9 9 9",
        "placeholder": "_",
        showMaskOnHover: false,
        showMaskOnFocus: false,
        definitions: {
          '9': {
            validator: "[0-9]"
          }
        }
      });
    }
  }

  _functions.initMask()


  //*==============
  //*  Select     =
  //*==============
  _functions.initSelect = function (parent) {
    $("" + parent + " .SelectBox").each(function () {
      if ($(".SelectBox[multiple]")) {
        $(this).SumoSelect({
          floatWidth: 0,
          nativeOnDevice: [],
          okCancelInMulti: true,
          csvDispCount: 1,
          captionFormat: '{0} Selected',
          locale: ['Ok', 'Cancel', 'All'],
          placeholder: ''
        });
      } else {
        $(this).SumoSelect({
          floatWidth: 0,
          nativeOnDevice: [],
          placeholder: ''
        });
      }


      $(this).on('sumo:opened', function () {
        $(this).closest('.input-field').addClass('focus');
      });

      $(this).on('sumo:closed', function () {
        $(this).closest('.input-field').removeClass('focus');
      });
    });
  }

  _functions.initSelect('html');



  $(document).ready(function () {
    if ($('select').val()) {
      $(this).closest('.input-field').addClass('value');
    } else {
      $(this).closest('.input-field').removeClass('value');
    }
  });

  $(document).on('change', 'select', function () {
    if ($(this).val()) {
      $(this).closest('.input-field').addClass('value');
    } else {
      $(this).closest('.input-field').removeClass('value');
    }
  });


  // date-separate-input
  _functions.validateSeparateDateInput = function ($el) {
    let $wrap = $el.closest(".date-separate-input");
    const $daySelect = $wrap.find("select").eq(0);
    const $monthSelect = $wrap.find("select").eq(1);
    const $yearSelect = $wrap.find("select").eq(2);
    const day = $daySelect.val();
    const month = $monthSelect.val();
    const year = $yearSelect.val();

    const date = new Date(`${year}/${month}/${day}`);

    const dateValid =
      (date.getFullYear() == year &&
        date.getMonth() + 1 == month &&
        date.getDate() == day) ||
      !(day.length && month.length && year.length);

    if (!dateValid) {
      return false;
    }
    return true;
  };

  $(document).on('change', ".date-separate-input select", function () {
    if (!_functions.validateSeparateDateInput($(this))) {
      $(this).closest(".date-separate-input").addClass("invalid");
    } else {
      $(this).closest(".date-separate-input").removeClass("invalid");
    }
  })




  //*==============
  //*  Calendar   =
  //*==============
  // https://wakirin.github.io/Lightpick/
  _functions.initCalendar = function (selector = document) {
    $(selector).find(".calendar").each(function () {
      const calendar = $(this);
      const isSingle = Boolean(calendar.attr("data-single"));

      const options = {
        field: calendar.get(0),
        parentEl: calendar.closest(".input-field").get(0),
        autoclose: true,
        lang: "ua",
        format: "DD.MM.YYYY",
        singleDate: isSingle,
        selectForward: true,
        selectBackward: false,
        // minDays: 3,
        // maxDays: 7,
        // numberOfMonths: 6,
        // numberOfColumns: 3,
        footer: true,
        locale: {
          buttons: {
            prev: '',
            next: '',
            close: '',
            reset: 'Скасувати',
            apply: 'Підтвердити'
          },
          tooltip: {
            one: 'День',
            few: 'Дні',
            many: 'Днів',
            other: 'Днів'
          },
          pluralize: function (i, locale) {
            if ('one' in locale && i % 10 === 1 && !(i % 100 === 11)) return locale.one;
            if ('few' in locale && i % 10 === Math.floor(i % 10) && i % 10 >= 2 && i % 10 <= 4 && !(i % 100 >= 12 && i % 100 <= 14)) return locale.few;
            if ('many' in locale && (i % 10 === 0 || i % 10 === Math.floor(i % 10) && i % 10 >= 5 && i % 10 <= 9 || i % 100 === Math.floor(i % 100) && i % 100 >= 11 && i % 100 <= 14)) return locale.many;
            if ('other' in locale) return locale.other;

            return '';
          }
        },
        onOpen: function () {
          calendar.closest(".input-field").removeClass("invalid");
        },
        // onSelect: function (start, end) {
        //   console.log(start)
        //   console.log(end)

        //   if (!isSingle) {
        //     let str = '';
        //     str += start ? start.format('DD.MM.YYYY') + ' - ' : '';
        //     str += end ? end.format('DD.MM.YYYY') : '';

        //     if (str.length > 0) {
        //       calendar.closest(".input-field").addClass("value");
        //     }

        //     calendar.val(str);
        //   }
        // },
        onClose: function () {
          if (calendar.attr("required")) {
            calendar.closest(".input-field").addClass("invalid");

          } else {
            calendar.closest(".input-field").removeClass("invalid");
          }

          if (calendar.val().length > 0) {
            calendar.closest(".input-field").addClass("value");

          } else {
            calendar.closest(".input-field").removeClass("value");
          }
        },
      };

      const max = calendar.attr("data-max");
      if (max) options.maxDate = max;

      const birth = calendar.hasClass("birthday");
      if (birth) options.maxDate = new Date();

      calendar.get(0)._picker = new Lightpick(options);

      calendar.attr("readonly", "readonly");

      calendar.closest(".input-field").append('<i class="input-clear"></i>')
    });
  };

  _functions.initCalendar();

  $(document).on("click", ".input-clear", function () {
    const calendarPick = $(this).closest(".input-field").find(".calendar")[0]._picker;
    if (calendarPick) {
      calendarPick.reset();
      $(this).closest(".input-field").removeClass("value")
      return
    }

    $(this).closest(".input-field").removeClass("value").find("input").val("").trigger("change");
    $(this).closest(".input-field").removeClass("value").find("select").val("").trigger("change");
  });



  // clear inputs
  _functions.clearAllInputs = function (wrapper) {
    $(wrapper).find('input[type="radio"], input[type="checkbox"]').prop("checked", false);
    $(wrapper).find('input[type="radio"][checked]').prop("checked", true).trigger("change");
    $(wrapper).find('input[type="checkbox"][checked]').prop("checked", true).trigger("change");

    // $(wrapper).find('input[type="radio"], input[type="checkbox"]').trigger("change");
    // $(wrapper).find('input[type="text"], input[type="number"]').val("");
    $(wrapper).find("select.SelectBox").each(function () {
      $(this)[0].sumo.unSelectAll();
      $(this)[0].sumo.disable();
    });

    $(wrapper).find(".range-input").each(function () {
      const range = $(this).data("ionRangeSlider");

      if (range.options.type == "double") {
        range.options.fromInput.val(range.options.min).trigger("change");
        range.options.toInput.val(range.options.max).trigger("change");
      } else {
        range.reset();
      }
    });

    $(wrapper).find(".input-field.value").removeClass("value");
  };

});
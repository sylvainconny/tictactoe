$('input').change(function () {
  const board = $("form").serializeArray().map(i => i.value.length ? i.value : ' ').join('');
  $.post("/", {
    board
  }, function (data) {
    const { result, error } = JSON.parse(data);
    if (error) {
      $('.result').css('display', 'none');
      $('.error').css('display', 'block').html(error);
      return;
    }
    if (result) {
      $('.error').css('display', 'none');
      $('.result').css('display', 'block').html(result);
    }
  });
});

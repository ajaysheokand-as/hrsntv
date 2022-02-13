function ajaxRequest(url, data, success) {
  $.ajax({
    url: "./api/" + url,
    method: "POST",
    data: JSON.stringify(data),
    contentType: "application/json",
    dataType: "json",
    success: success,
  });
}

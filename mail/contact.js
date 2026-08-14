$(function () {

    // ── Bootstrap-Validation + AJAX submission ────────────────────────────────
    $("#contactForm input, #contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,

        submitError: function ($form, event, errors) {
            // Validation errors are already shown inline — nothing extra needed.
        },

        submitSuccess: function ($form, event) {
            event.preventDefault();

            var name    = $("input#name").val().trim();
            var email   = $("input#email").val().trim();
            var subject = $("input#subject").val().trim();
            var message = $("textarea#message").val().trim();

            var $btn     = $("#sendMessageButton");
            var $text    = $("#btnText");
            var $spinner = $("#btnSpinner");

            // ── Loading state ─────────────────────────────────────────────────
            $btn.prop("disabled", true);
            $text.text("Sending…");
            $spinner.show();
            $("#success").html(""); // clear previous alerts

            $.ajax({
                url:  "mail/contact.php",
                type: "POST",
                // No dataType:'json' — lets jQuery succeed on any 2xx even if a PHP notice
                // sneaks into the output. We parse JSON manually in the success handler.
                data: {
                    name:    name,
                    email:   email,
                    subject: subject,
                    message: message
                },
                cache: false,

                // ── Success (HTTP 2xx) ─────────────────────────────────────────
                success: function (responseText) {
                    // Parse JSON safely — tolerant of any extra whitespace/notices
                    var response = {};
                    try { response = JSON.parse(responseText); } catch (e) {}

                    showAlert(
                        "success",
                        "<i class='fa fa-check-circle mr-2'></i>" +
                        "<strong>Message sent!</strong> " +
                        "Thank you, <strong>" + escapeHtml(name) + "</strong>. " +
                        "We\u2019ll get back to you shortly."
                    );
                    $form[0].reset();
                },

                // ── Error (HTTP 4xx / 5xx) ────────────────────────────────────
                error: function (xhr) {
                    // Log the raw response so it’s visible in browser DevTools → Console
                    console.error('[Fraser] mail/contact.php error. Status:', xhr.status, '\nResponse:', xhr.responseText);

                    var msg = "Sorry, our mail server is not responding. Please try again later.";
                    try {
                        var json = JSON.parse(xhr.responseText);
                        if (json && json.message) msg = json.message;
                    } catch (e) {}

                    showAlert(
                        "danger",
                        "<i class='fa fa-exclamation-circle mr-2'></i>" +
                        "<strong>Oops!</strong> " + escapeHtml(msg)
                    );
                },

                // ── Always restore button ─────────────────────────────────────
                complete: function () {
                    setTimeout(function () {
                        $btn.prop("disabled", false);
                        $text.text("Send Message");
                        $spinner.hide();
                    }, 800);
                }
            });
        },

        filter: function () {
            return $(this).is(":visible");
        }
    });

    // ── Clear alert when user starts typing again ─────────────────────────────
    $("#contactForm input, #contactForm textarea").on("focus", function () {
        $("#success").html("");
    });

    // ── Tab links ─────────────────────────────────────────────────────────────
    $("a[data-toggle=\"tab\"]").click(function (e) {
        e.preventDefault();
        $(this).tab("show");
    });

    // ── Helpers ───────────────────────────────────────────────────────────────

    /**
     * Render a dismissible Bootstrap alert inside #success.
     * @param {string} type    Bootstrap colour: 'success' | 'danger' | 'warning'
     * @param {string} html    Inner HTML of the message body
     */
    function showAlert(type, html) {
        var alert =
            "<div class='alert alert-" + type + " alert-dismissible fade show' role='alert'>" +
                html +
                "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>" +
                    "<span aria-hidden='true'>&times;</span>" +
                "</button>" +
            "</div>";
        $("#success").html(alert);
    }

    /**
     * Minimal HTML-escape to prevent XSS when embedding user input in alerts.
     */
    function escapeHtml(str) {
        return $("<div>").text(str).html();
    }
});

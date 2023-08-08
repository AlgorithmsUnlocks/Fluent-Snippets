// Add this code to the functions.php file or the code snippet:

add_action('fluentform/loaded', function ($app) {
    $app->router->post('/test-submit', function () use ($app) {
    try {
    $data = $app->request->get('data');

    $data['_wp_http_referer'] = isset($data['_wp_http_referer']) ? sanitize_url(urldecode($data['_wp_http_referer'])) : '';

    $app->request->merge(['data' => $data]);

    $formId = intval($app->request->get('form_id'));

    $response = (new FluentForm\App\Services\Form\SubmissionHandlerService())->handleSubmission($data, $formId);

    return $app->response->json($response);
    } catch (FluentForm\Framework\Validator\ValidationException $e) {
    return $app->response->json($e->errors(), $e->getCode());
    }
    });
});



// Use this JSON Format for submit the forms with specific entries

{
    "form_id": "1",
    "data": {
        "email" : "ruman@gmail.com",
        "names": {
            "first_name": "ruman",
            "last_name" : "ahmed"
        },
        "subject" : "test",
        "message": "Hello"
    }
}
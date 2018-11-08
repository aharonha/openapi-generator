<?php
/**
 * FakeApi
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPIServer\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * OpenAPI spec version: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */
namespace OpenAPIServer\Api;

use OpenAPIServer\AbstractApiController;

/**
 * FakeApi Class Doc Comment
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPIServer\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
class FakeApi extends AbstractApiController
{

    /**
     * POST fakeOuterBooleanSerialize
     * Notes: Test serialization of outer boolean types
     * Output-Formats: [*_/_*]
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     */
    public function fakeOuterBooleanSerialize($request, $response, $args)
    {
        $body = $request->getParsedBody();
        $response->write('How about implementing fakeOuterBooleanSerialize as a POST method ?');
        return $response;
    }

    /**
     * POST fakeOuterCompositeSerialize
     * Notes: Test serialization of object with outer number type
     * Output-Formats: [*_/_*]
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     */
    public function fakeOuterCompositeSerialize($request, $response, $args)
    {
        $body = $request->getParsedBody();
        $response->write('How about implementing fakeOuterCompositeSerialize as a POST method ?');
        return $response;
    }

    /**
     * POST fakeOuterNumberSerialize
     * Notes: Test serialization of outer number types
     * Output-Formats: [*_/_*]
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     */
    public function fakeOuterNumberSerialize($request, $response, $args)
    {
        $body = $request->getParsedBody();
        $response->write('How about implementing fakeOuterNumberSerialize as a POST method ?');
        return $response;
    }

    /**
     * POST fakeOuterStringSerialize
     * Notes: Test serialization of outer string types
     * Output-Formats: [*_/_*]
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     */
    public function fakeOuterStringSerialize($request, $response, $args)
    {
        $body = $request->getParsedBody();
        $response->write('How about implementing fakeOuterStringSerialize as a POST method ?');
        return $response;
    }

    /**
     * PUT testBodyWithFileSchema
     * Notes: For this test, the body for this request much reference a schema named &#x60;File&#x60;.
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     */
    public function testBodyWithFileSchema($request, $response, $args)
    {
        $body = $request->getParsedBody();
        $response->write('How about implementing testBodyWithFileSchema as a PUT method ?');
        return $response;
    }

    /**
     * PUT testBodyWithQueryParams
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     */
    public function testBodyWithQueryParams($request, $response, $args)
    {
        $queryParams = $request->getQueryParams();
        $query = $request->getQueryParam('query');
        $body = $request->getParsedBody();
        $response->write('How about implementing testBodyWithQueryParams as a PUT method ?');
        return $response;
    }

    /**
     * PATCH testClientModel
     * Summary: To test \&quot;client\&quot; model
     * Notes: To test \&quot;client\&quot; model
     * Output-Formats: [application/json]
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     */
    public function testClientModel($request, $response, $args)
    {
        $body = $request->getParsedBody();
        $response->write('How about implementing testClientModel as a PATCH method ?');
        return $response;
    }

    /**
     * POST testEndpointParameters
     * Summary: Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트
     * Notes: Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     */
    public function testEndpointParameters($request, $response, $args)
    {
        $integer = $request->getParsedBodyParam('integer');
        $int32 = $request->getParsedBodyParam('int32');
        $int64 = $request->getParsedBodyParam('int64');
        $number = $request->getParsedBodyParam('number');
        $float = $request->getParsedBodyParam('float');
        $double = $request->getParsedBodyParam('double');
        $string = $request->getParsedBodyParam('string');
        $patternWithoutDelimiter = $request->getParsedBodyParam('pattern_without_delimiter');
        $byte = $request->getParsedBodyParam('byte');
        $binary = (key_exists('binary', $request->getUploadedFiles())) ? $request->getUploadedFiles()['binary'] : null;
        $date = $request->getParsedBodyParam('date');
        $dateTime = $request->getParsedBodyParam('dateTime');
        $password = $request->getParsedBodyParam('password');
        $callback = $request->getParsedBodyParam('callback');
        $response->write('How about implementing testEndpointParameters as a POST method ?');
        return $response;
    }

    /**
     * GET testEnumParameters
     * Summary: To test enum parameters
     * Notes: To test enum parameters
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     */
    public function testEnumParameters($request, $response, $args)
    {
        $headers = $request->getHeaders();
        $enumHeaderStringArray = $request->hasHeader('enum_header_string_array') ? $headers['enum_header_string_array'] : null;
        $enumHeaderString = $request->hasHeader('enum_header_string') ? $headers['enum_header_string'] : null;
        $queryParams = $request->getQueryParams();
        $enumQueryStringArray = $request->getQueryParam('enum_query_string_array');
        $enumQueryString = $request->getQueryParam('enum_query_string');
        $enumQueryInteger = $request->getQueryParam('enum_query_integer');
        $enumQueryDouble = $request->getQueryParam('enum_query_double');
        $enumFormStringArray = $request->getParsedBodyParam('enum_form_string_array');
        $enumFormString = $request->getParsedBodyParam('enum_form_string');
        $response->write('How about implementing testEnumParameters as a GET method ?');
        return $response;
    }

    /**
     * DELETE testGroupParameters
     * Summary: Fake endpoint to test group parameters (optional)
     * Notes: Fake endpoint to test group parameters (optional)
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     */
    public function testGroupParameters($request, $response, $args)
    {
        $headers = $request->getHeaders();
        $booleanGroup = $request->hasHeader('boolean_group') ? $headers['boolean_group'] : null;
        $queryParams = $request->getQueryParams();
        $stringGroup = $request->getQueryParam('string_group');
        $int64Group = $request->getQueryParam('int64_group');
        $response->write('How about implementing testGroupParameters as a DELETE method ?');
        return $response;
    }

    /**
     * POST testInlineAdditionalProperties
     * Summary: test inline additionalProperties
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     */
    public function testInlineAdditionalProperties($request, $response, $args)
    {
        $body = $request->getParsedBody();
        $response->write('How about implementing testInlineAdditionalProperties as a POST method ?');
        return $response;
    }

    /**
     * GET testJsonFormData
     * Summary: test json serialization of form data
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     */
    public function testJsonFormData($request, $response, $args)
    {
        $param = $request->getParsedBodyParam('param');
        $param2 = $request->getParsedBodyParam('param2');
        $response->write('How about implementing testJsonFormData as a GET method ?');
        return $response;
    }
}

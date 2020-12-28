<?php

namespace Azar\Jsonable;

use Illuminate\Http\JsonResponse;

trait jsonableTrait {

    /**
         * The request has succeeded.
         *
         * @param  mixed      $data Response body
         * @param  string|null $key  parent key (Optional key)
         * @return Illuminate\Http\JsonResponse
         */
        protected function ok(string $message, $data = null) : JsonResponse
        {
            return response()->json($this->body($message,$data), 200);
        }

         /**
         * The request has been fulfilled and resulted in a new resource being created.
         *
         * @param  mixed      $data Response body
         * @param  string|null $key  parent key (Optional key)
         * @return Illuminate\Http\JsonResponse
         */
        protected function created(string $message, $data = null)  : JsonResponse
        {
            return response()->json($this->body($message,$data), 201);
        }

        /**
         * The request has been accepted for processing, but the processing has not been completed.
         *
         * @param  mixed      $data Response body
         * @param  string|null $key  parent key (Optional key)
         * @return Illuminate\Http\JsonResponse
         */
        protected function accepted(string $message, $data = null): JsonResponse
        {
            return response()->json($this->body($message,$data), 202);
        }

        /**
         * The request successfully deleted the resource
         *
         * @return Illuminate\Http\JsonResponse
         */
        protected function noContent(string $message) : JsonResponse
        {
            return response()->json($this->body($message), 204);
        }

        /**
         * The request could not be understood by the server due to malformed syntax.
         * The client SHOULD NOT repeat the request without modifications.
         *
         * @param  mixed      $data Response body
         * @param  string|null $key  parent key (Optional key)
         * @return Illuminate\Http\JsonResponse
         */
        protected function badRequest(string $message, $data = null): JsonResponse
        {
            return response()->json($this->body($message,$data), 400);
        }

         /**
         * The request requires user authentication.
         *
         * @param  mixed      $data Response body
         * @param  string|null $key  parent key (Optional key)
         * @return Illuminate\Http\JsonResponse
         */
        protected function unauthorized(string $message, $data = null): JsonResponse
        {
            return response()->json($this->body($message,$data), 401);
        }

        /**
         * The original intention was that this code might be used as part of some form of digital cash or micropayment scheme,
         * but that has not happened, and this code is not usually used.
         *
         * @param  mixed      $data Response body
         * @param  string|null $key  parent key (Optional key)
         * @return Illuminate\Http\JsonResponse
         */
        protected function paymentRequired(string $message, $data = null): JsonResponse
        {
            return response()->json($this->body($message,$data), 402);
        }

         /**
         * The server understood the request, but is refusing to fulfill it.
         * Authorization will not help and the request SHOULD NOT be repeated.
         *
         * @param  mixed      $data Response body
         * @param  string|null $key  parent key (Optional key)
         * @return Illuminate\Http\JsonResponse
         */
        protected function forbidden(string $message, $data = null): JsonResponse
        {
            return response()->json($this->body($message,$data), 403);
        }

         /**
         * The server has not found anything matching the Request-URI.
         * No indication is given of whether the condition is temporary or permanent.
         *
         * @param  mixed      $data Response body
         * @param  string|null $key  parent key (Optional key)
         * @return Illuminate\Http\JsonResponse
         */
        protected function notFound(string $message, $data = null) : JsonResponse
        {
            return response()->json($this->body($message, $data), 404);
        }

        /**
         * The server understands the content type of the request entity,
         * and the syntax of the request entity is correct,
         * but was unable to process the contained instructions.
         *
         * @param  mixed      $data Response body
         * @param  string|null $key  parent key (Optional key)
         * @return Illuminate\Http\JsonResponse
         */
        protected function invalid(string $message, $data = null): JsonResponse
        {
            return response()->json($this->body($message,$data), 422);
        }

        /**
         * Optionally add a parent key to the response body
         *
         * @param  mixed      $data Response body
         * @param  string|null $key  parent key (Optional key)
         * @return mixed
         */


        protected function body(string $message, $data = null){

            if ($data) {

                return  array('message' => $message,"data" => $data );

            }

            return  array('message' => $message);

        }

}

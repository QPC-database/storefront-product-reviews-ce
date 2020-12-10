<?php
# Generated by the protocol buffer compiler (spiral/php-grpc). DO NOT EDIT!
# source: reviews/reviews.proto

namespace Magento\ReviewsStorefrontApi\Proto;

use Spiral\GRPC;

interface ProductReviewsInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "magento.reviewsStorefrontApi.proto.ProductReviews";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param ImportReviewsRequest $in
    * @return ImportReviewsResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function importProductReviews(GRPC\ContextInterface $ctx, ImportReviewsRequest $in): ImportReviewsResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param DeleteReviewsRequest $in
    * @return DeleteReviewsResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function deleteProductReviews(GRPC\ContextInterface $ctx, DeleteReviewsRequest $in): DeleteReviewsResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param ProductReviewRequest $in
    * @return ProductReviewResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function getProductReviews(GRPC\ContextInterface $ctx, ProductReviewRequest $in): ProductReviewResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param CustomerProductReviewRequest $in
    * @return ProductReviewResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function getCustomerProductReviews(GRPC\ContextInterface $ctx, CustomerProductReviewRequest $in): ProductReviewResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param ProductReviewCountRequest $in
    * @return ProductReviewCountResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function getProductReviewCount(GRPC\ContextInterface $ctx, ProductReviewCountRequest $in): ProductReviewCountResponse;
}

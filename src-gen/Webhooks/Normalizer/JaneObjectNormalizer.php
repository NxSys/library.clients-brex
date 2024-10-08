<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Webhooks\Normalizer;

use NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\CreateWebhookSubscriptionRequest::class => CreateWebhookSubscriptionRequestNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEvent::class => ExpensePaymentStatusUpdatedEventNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEventAmount::class => ExpensePaymentStatusUpdatedEventAmountNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\Money::class => MoneyNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\PageWebhookSubscription::class => PageWebhookSubscriptionNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ProductApplication::class => ProductApplicationNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralActivatedEvent::class => ReferralActivatedEventNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralApplicationStatusChangedEvent::class => ReferralApplicationStatusChangedEventNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralCreatedEvent::class => ReferralCreatedEventNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent::class => TransferEventNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferFailedEvent::class => TransferFailedEventNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferProcessedEvent::class => TransferProcessedEventNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\UpdateWebhookSubscriptionRequest::class => UpdateWebhookSubscriptionRequestNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\UserUpdatedEvent::class => UserUpdatedEventNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSecret::class => WebhookSecretNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSubscription::class => WebhookSubscriptionNormalizer::class,

            \Jane\Component\JsonSchemaRuntime\Reference::class => \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Normalizer\ReferenceNormalizer::class,
        ];
        protected $normalizersCache = [];

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);

            return $denormalizer->denormalize($data, $type, $format, $context);
        }

        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }

        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;

            return $normalizer;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\CreateWebhookSubscriptionRequest::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEvent::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEventAmount::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\Money::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\PageWebhookSubscription::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\ProductApplication::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralActivatedEvent::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralApplicationStatusChangedEvent::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralCreatedEvent::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferFailedEvent::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferProcessedEvent::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\UpdateWebhookSubscriptionRequest::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\UserUpdatedEvent::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSecret::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSubscription::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\CreateWebhookSubscriptionRequest::class => CreateWebhookSubscriptionRequestNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEvent::class => ExpensePaymentStatusUpdatedEventNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEventAmount::class => ExpensePaymentStatusUpdatedEventAmountNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\Money::class => MoneyNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\PageWebhookSubscription::class => PageWebhookSubscriptionNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ProductApplication::class => ProductApplicationNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralActivatedEvent::class => ReferralActivatedEventNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralApplicationStatusChangedEvent::class => ReferralApplicationStatusChangedEventNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralCreatedEvent::class => ReferralCreatedEventNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent::class => TransferEventNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferFailedEvent::class => TransferFailedEventNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferProcessedEvent::class => TransferProcessedEventNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\UpdateWebhookSubscriptionRequest::class => UpdateWebhookSubscriptionRequestNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\UserUpdatedEvent::class => UserUpdatedEventNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSecret::class => WebhookSecretNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSubscription::class => WebhookSubscriptionNormalizer::class,

            \Jane\Component\JsonSchemaRuntime\Reference::class => \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Normalizer\ReferenceNormalizer::class,
        ];
        protected $normalizersCache = [];

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);

            return $denormalizer->denormalize($data, $type, $format, $context);
        }

        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }

        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;

            return $normalizer;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\CreateWebhookSubscriptionRequest::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEvent::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEventAmount::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\Money::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\PageWebhookSubscription::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\ProductApplication::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralActivatedEvent::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralApplicationStatusChangedEvent::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralCreatedEvent::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferFailedEvent::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferProcessedEvent::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\UpdateWebhookSubscriptionRequest::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\UserUpdatedEvent::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSecret::class => false,
                \NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSubscription::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
}

<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Webhooks\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
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
    class TransferEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (array_key_exists('event_type', $data) and 'TRANSFER_FAILED' === $data['event_type']) {
                return $this->denormalizer->denormalize($data, 'NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferFailedEvent', $format, $context);
            }
            if (array_key_exists('event_type', $data) and 'TRANSFER_PROCESSED' === $data['event_type']) {
                return $this->denormalizer->denormalize($data, 'NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferProcessedEvent', $format, $context);
            }
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('company_id', $data)) {
                $object->setCompanyId($data['company_id']);
                unset($data['company_id']);
            }
            if (\array_key_exists('payment_type', $data)) {
                $object->setPaymentType($data['payment_type']);
                unset($data['payment_type']);
            }
            if (\array_key_exists('return_for_id', $data) && $data['return_for_id'] !== null) {
                $object->setReturnForId($data['return_for_id']);
                unset($data['return_for_id']);
            } elseif (\array_key_exists('return_for_id', $data) && $data['return_for_id'] === null) {
                $object->setReturnForId(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if (null !== $object->getEventType() and 'TRANSFER_FAILED' === $object->getEventType()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getEventType() and 'TRANSFER_PROCESSED' === $object->getEventType()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            $data['company_id'] = $object->getCompanyId();
            $data['payment_type'] = $object->getPaymentType();
            if ($object->isInitialized('returnForId') && null !== $object->getReturnForId()) {
                $data['return_for_id'] = $object->getReturnForId();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent::class => false];
        }
    }
} else {
    class TransferEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (array_key_exists('event_type', $data) and 'TRANSFER_FAILED' === $data['event_type']) {
                return $this->denormalizer->denormalize($data, 'NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferFailedEvent', $format, $context);
            }
            if (array_key_exists('event_type', $data) and 'TRANSFER_PROCESSED' === $data['event_type']) {
                return $this->denormalizer->denormalize($data, 'NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferProcessedEvent', $format, $context);
            }
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('company_id', $data)) {
                $object->setCompanyId($data['company_id']);
                unset($data['company_id']);
            }
            if (\array_key_exists('payment_type', $data)) {
                $object->setPaymentType($data['payment_type']);
                unset($data['payment_type']);
            }
            if (\array_key_exists('return_for_id', $data) && $data['return_for_id'] !== null) {
                $object->setReturnForId($data['return_for_id']);
                unset($data['return_for_id']);
            } elseif (\array_key_exists('return_for_id', $data) && $data['return_for_id'] === null) {
                $object->setReturnForId(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if (null !== $object->getEventType() and 'TRANSFER_FAILED' === $object->getEventType()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getEventType() and 'TRANSFER_PROCESSED' === $object->getEventType()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            $data['company_id'] = $object->getCompanyId();
            $data['payment_type'] = $object->getPaymentType();
            if ($object->isInitialized('returnForId') && null !== $object->getReturnForId()) {
                $data['return_for_id'] = $object->getReturnForId();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent::class => false];
        }
    }
}

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
    class ExpensePaymentStatusUpdatedEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEvent::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEvent::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEvent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('event_type', $data)) {
                $object->setEventType($data['event_type']);
                unset($data['event_type']);
            }
            if (\array_key_exists('expense_id', $data)) {
                $object->setExpenseId($data['expense_id']);
                unset($data['expense_id']);
            }
            if (\array_key_exists('payment_status', $data)) {
                $object->setPaymentStatus($data['payment_status']);
                unset($data['payment_status']);
            }
            if (\array_key_exists('payment_type', $data)) {
                $object->setPaymentType($data['payment_type']);
                unset($data['payment_type']);
            }
            if (\array_key_exists('company_id', $data)) {
                $object->setCompanyId($data['company_id']);
                unset($data['company_id']);
            }
            if (\array_key_exists('amount', $data)) {
                $object->setAmount($this->denormalizer->denormalize($data['amount'], \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEventAmount::class, 'json', $context));
                unset($data['amount']);
            }
            if (\array_key_exists('payment_description', $data)) {
                $object->setPaymentDescription($data['payment_description']);
                unset($data['payment_description']);
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
            $data['event_type'] = $object->getEventType();
            $data['expense_id'] = $object->getExpenseId();
            $data['payment_status'] = $object->getPaymentStatus();
            $data['payment_type'] = $object->getPaymentType();
            if ($object->isInitialized('companyId') && null !== $object->getCompanyId()) {
                $data['company_id'] = $object->getCompanyId();
            }
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $this->normalizer->normalize($object->getAmount(), 'json', $context);
            }
            if ($object->isInitialized('paymentDescription') && null !== $object->getPaymentDescription()) {
                $data['payment_description'] = $object->getPaymentDescription();
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
            return [\NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEvent::class => false];
        }
    }
} else {
    class ExpensePaymentStatusUpdatedEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEvent::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEvent::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEvent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('event_type', $data)) {
                $object->setEventType($data['event_type']);
                unset($data['event_type']);
            }
            if (\array_key_exists('expense_id', $data)) {
                $object->setExpenseId($data['expense_id']);
                unset($data['expense_id']);
            }
            if (\array_key_exists('payment_status', $data)) {
                $object->setPaymentStatus($data['payment_status']);
                unset($data['payment_status']);
            }
            if (\array_key_exists('payment_type', $data)) {
                $object->setPaymentType($data['payment_type']);
                unset($data['payment_type']);
            }
            if (\array_key_exists('company_id', $data)) {
                $object->setCompanyId($data['company_id']);
                unset($data['company_id']);
            }
            if (\array_key_exists('amount', $data)) {
                $object->setAmount($this->denormalizer->denormalize($data['amount'], \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEventAmount::class, 'json', $context));
                unset($data['amount']);
            }
            if (\array_key_exists('payment_description', $data)) {
                $object->setPaymentDescription($data['payment_description']);
                unset($data['payment_description']);
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
            $data['event_type'] = $object->getEventType();
            $data['expense_id'] = $object->getExpenseId();
            $data['payment_status'] = $object->getPaymentStatus();
            $data['payment_type'] = $object->getPaymentType();
            if ($object->isInitialized('companyId') && null !== $object->getCompanyId()) {
                $data['company_id'] = $object->getCompanyId();
            }
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $this->normalizer->normalize($object->getAmount(), 'json', $context);
            }
            if ($object->isInitialized('paymentDescription') && null !== $object->getPaymentDescription()) {
                $data['payment_description'] = $object->getPaymentDescription();
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
            return [\NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEvent::class => false];
        }
    }
}

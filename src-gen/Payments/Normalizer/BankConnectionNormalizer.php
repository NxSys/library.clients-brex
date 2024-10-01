<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Payments\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Payments\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Payments\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class BankConnectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnection::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnection::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnection();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('bank_details', $data)) {
                $object->setBankDetails($this->denormalizer->denormalize($data['bank_details'], \NxSys\Library\Clients\Brex\API\Payments\Model\BankDetails::class, 'json', $context));
                unset($data['bank_details']);
            }
            if (\array_key_exists('brex_account_id', $data) && $data['brex_account_id'] !== null) {
                $object->setBrexAccountId($data['brex_account_id']);
                unset($data['brex_account_id']);
            } elseif (\array_key_exists('brex_account_id', $data) && $data['brex_account_id'] === null) {
                $object->setBrexAccountId(null);
            }
            if (\array_key_exists('last_four', $data)) {
                $object->setLastFour($data['last_four']);
                unset($data['last_four']);
            }
            if (\array_key_exists('available_balance', $data)) {
                $object->setAvailableBalance($this->denormalizer->denormalize($data['available_balance'], \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnectionAvailableBalance::class, 'json', $context));
                unset($data['available_balance']);
            }
            if (\array_key_exists('current_balance', $data)) {
                $object->setCurrentBalance($this->denormalizer->denormalize($data['current_balance'], \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnectionCurrentBalance::class, 'json', $context));
                unset($data['current_balance']);
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
            $data['id'] = $object->getId();
            if ($object->isInitialized('bankDetails') && null !== $object->getBankDetails()) {
                $data['bank_details'] = $this->normalizer->normalize($object->getBankDetails(), 'json', $context);
            }
            if ($object->isInitialized('brexAccountId') && null !== $object->getBrexAccountId()) {
                $data['brex_account_id'] = $object->getBrexAccountId();
            }
            $data['last_four'] = $object->getLastFour();
            if ($object->isInitialized('availableBalance') && null !== $object->getAvailableBalance()) {
                $data['available_balance'] = $this->normalizer->normalize($object->getAvailableBalance(), 'json', $context);
            }
            if ($object->isInitialized('currentBalance') && null !== $object->getCurrentBalance()) {
                $data['current_balance'] = $this->normalizer->normalize($object->getCurrentBalance(), 'json', $context);
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
            return [\NxSys\Library\Clients\Brex\API\Payments\Model\BankConnection::class => false];
        }
    }
} else {
    class BankConnectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnection::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnection::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnection();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('bank_details', $data)) {
                $object->setBankDetails($this->denormalizer->denormalize($data['bank_details'], \NxSys\Library\Clients\Brex\API\Payments\Model\BankDetails::class, 'json', $context));
                unset($data['bank_details']);
            }
            if (\array_key_exists('brex_account_id', $data) && $data['brex_account_id'] !== null) {
                $object->setBrexAccountId($data['brex_account_id']);
                unset($data['brex_account_id']);
            } elseif (\array_key_exists('brex_account_id', $data) && $data['brex_account_id'] === null) {
                $object->setBrexAccountId(null);
            }
            if (\array_key_exists('last_four', $data)) {
                $object->setLastFour($data['last_four']);
                unset($data['last_four']);
            }
            if (\array_key_exists('available_balance', $data)) {
                $object->setAvailableBalance($this->denormalizer->denormalize($data['available_balance'], \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnectionAvailableBalance::class, 'json', $context));
                unset($data['available_balance']);
            }
            if (\array_key_exists('current_balance', $data)) {
                $object->setCurrentBalance($this->denormalizer->denormalize($data['current_balance'], \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnectionCurrentBalance::class, 'json', $context));
                unset($data['current_balance']);
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
            $data['id'] = $object->getId();
            if ($object->isInitialized('bankDetails') && null !== $object->getBankDetails()) {
                $data['bank_details'] = $this->normalizer->normalize($object->getBankDetails(), 'json', $context);
            }
            if ($object->isInitialized('brexAccountId') && null !== $object->getBrexAccountId()) {
                $data['brex_account_id'] = $object->getBrexAccountId();
            }
            $data['last_four'] = $object->getLastFour();
            if ($object->isInitialized('availableBalance') && null !== $object->getAvailableBalance()) {
                $data['available_balance'] = $this->normalizer->normalize($object->getAvailableBalance(), 'json', $context);
            }
            if ($object->isInitialized('currentBalance') && null !== $object->getCurrentBalance()) {
                $data['current_balance'] = $this->normalizer->normalize($object->getCurrentBalance(), 'json', $context);
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
            return [\NxSys\Library\Clients\Brex\API\Payments\Model\BankConnection::class => false];
        }
    }
}

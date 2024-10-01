<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Team\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Team\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Team\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Team\Model\Address::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Team\Model\Address::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Team\Model\Address();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('line1', $data) && $data['line1'] !== null) {
                $object->setLine1($data['line1']);
                unset($data['line1']);
            } elseif (\array_key_exists('line1', $data) && $data['line1'] === null) {
                $object->setLine1(null);
            }
            if (\array_key_exists('line2', $data) && $data['line2'] !== null) {
                $object->setLine2($data['line2']);
                unset($data['line2']);
            } elseif (\array_key_exists('line2', $data) && $data['line2'] === null) {
                $object->setLine2(null);
            }
            if (\array_key_exists('city', $data) && $data['city'] !== null) {
                $object->setCity($data['city']);
                unset($data['city']);
            } elseif (\array_key_exists('city', $data) && $data['city'] === null) {
                $object->setCity(null);
            }
            if (\array_key_exists('state', $data) && $data['state'] !== null) {
                $object->setState($data['state']);
                unset($data['state']);
            } elseif (\array_key_exists('state', $data) && $data['state'] === null) {
                $object->setState(null);
            }
            if (\array_key_exists('country', $data) && $data['country'] !== null) {
                $object->setCountry($data['country']);
                unset($data['country']);
            } elseif (\array_key_exists('country', $data) && $data['country'] === null) {
                $object->setCountry(null);
            }
            if (\array_key_exists('postal_code', $data) && $data['postal_code'] !== null) {
                $object->setPostalCode($data['postal_code']);
                unset($data['postal_code']);
            } elseif (\array_key_exists('postal_code', $data) && $data['postal_code'] === null) {
                $object->setPostalCode(null);
            }
            if (\array_key_exists('phone_number', $data) && $data['phone_number'] !== null) {
                $object->setPhoneNumber($data['phone_number']);
                unset($data['phone_number']);
            } elseif (\array_key_exists('phone_number', $data) && $data['phone_number'] === null) {
                $object->setPhoneNumber(null);
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
            if ($object->isInitialized('line1') && null !== $object->getLine1()) {
                $data['line1'] = $object->getLine1();
            }
            if ($object->isInitialized('line2') && null !== $object->getLine2()) {
                $data['line2'] = $object->getLine2();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $object->getCountry();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['postal_code'] = $object->getPostalCode();
            }
            if ($object->isInitialized('phoneNumber') && null !== $object->getPhoneNumber()) {
                $data['phone_number'] = $object->getPhoneNumber();
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
            return [\NxSys\Library\Clients\Brex\API\Team\Model\Address::class => false];
        }
    }
} else {
    class AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Team\Model\Address::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Team\Model\Address::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Team\Model\Address();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('line1', $data) && $data['line1'] !== null) {
                $object->setLine1($data['line1']);
                unset($data['line1']);
            } elseif (\array_key_exists('line1', $data) && $data['line1'] === null) {
                $object->setLine1(null);
            }
            if (\array_key_exists('line2', $data) && $data['line2'] !== null) {
                $object->setLine2($data['line2']);
                unset($data['line2']);
            } elseif (\array_key_exists('line2', $data) && $data['line2'] === null) {
                $object->setLine2(null);
            }
            if (\array_key_exists('city', $data) && $data['city'] !== null) {
                $object->setCity($data['city']);
                unset($data['city']);
            } elseif (\array_key_exists('city', $data) && $data['city'] === null) {
                $object->setCity(null);
            }
            if (\array_key_exists('state', $data) && $data['state'] !== null) {
                $object->setState($data['state']);
                unset($data['state']);
            } elseif (\array_key_exists('state', $data) && $data['state'] === null) {
                $object->setState(null);
            }
            if (\array_key_exists('country', $data) && $data['country'] !== null) {
                $object->setCountry($data['country']);
                unset($data['country']);
            } elseif (\array_key_exists('country', $data) && $data['country'] === null) {
                $object->setCountry(null);
            }
            if (\array_key_exists('postal_code', $data) && $data['postal_code'] !== null) {
                $object->setPostalCode($data['postal_code']);
                unset($data['postal_code']);
            } elseif (\array_key_exists('postal_code', $data) && $data['postal_code'] === null) {
                $object->setPostalCode(null);
            }
            if (\array_key_exists('phone_number', $data) && $data['phone_number'] !== null) {
                $object->setPhoneNumber($data['phone_number']);
                unset($data['phone_number']);
            } elseif (\array_key_exists('phone_number', $data) && $data['phone_number'] === null) {
                $object->setPhoneNumber(null);
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
            if ($object->isInitialized('line1') && null !== $object->getLine1()) {
                $data['line1'] = $object->getLine1();
            }
            if ($object->isInitialized('line2') && null !== $object->getLine2()) {
                $data['line2'] = $object->getLine2();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $object->getCountry();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['postal_code'] = $object->getPostalCode();
            }
            if ($object->isInitialized('phoneNumber') && null !== $object->getPhoneNumber()) {
                $data['phone_number'] = $object->getPhoneNumber();
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
            return [\NxSys\Library\Clients\Brex\API\Team\Model\Address::class => false];
        }
    }
}

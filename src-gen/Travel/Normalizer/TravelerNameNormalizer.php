<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Travel\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class TravelerNameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\TravelerName::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\TravelerName::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\TravelerName();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('first_name', $data)) {
                $object->setFirstName($data['first_name']);
                unset($data['first_name']);
            }
            if (\array_key_exists('middle_name', $data) && $data['middle_name'] !== null) {
                $object->setMiddleName($data['middle_name']);
                unset($data['middle_name']);
            } elseif (\array_key_exists('middle_name', $data) && $data['middle_name'] === null) {
                $object->setMiddleName(null);
            }
            if (\array_key_exists('last_name', $data)) {
                $object->setLastName($data['last_name']);
                unset($data['last_name']);
            }
            if (\array_key_exists('suffix', $data) && $data['suffix'] !== null) {
                $object->setSuffix($data['suffix']);
                unset($data['suffix']);
            } elseif (\array_key_exists('suffix', $data) && $data['suffix'] === null) {
                $object->setSuffix(null);
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
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['first_name'] = $object->getFirstName();
            }
            if ($object->isInitialized('middleName') && null !== $object->getMiddleName()) {
                $data['middle_name'] = $object->getMiddleName();
            }
            if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
                $data['last_name'] = $object->getLastName();
            }
            if ($object->isInitialized('suffix') && null !== $object->getSuffix()) {
                $data['suffix'] = $object->getSuffix();
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
            return [\NxSys\Library\Clients\Brex\API\Travel\Model\TravelerName::class => false];
        }
    }
} else {
    class TravelerNameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\TravelerName::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\TravelerName::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\TravelerName();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('first_name', $data)) {
                $object->setFirstName($data['first_name']);
                unset($data['first_name']);
            }
            if (\array_key_exists('middle_name', $data) && $data['middle_name'] !== null) {
                $object->setMiddleName($data['middle_name']);
                unset($data['middle_name']);
            } elseif (\array_key_exists('middle_name', $data) && $data['middle_name'] === null) {
                $object->setMiddleName(null);
            }
            if (\array_key_exists('last_name', $data)) {
                $object->setLastName($data['last_name']);
                unset($data['last_name']);
            }
            if (\array_key_exists('suffix', $data) && $data['suffix'] !== null) {
                $object->setSuffix($data['suffix']);
                unset($data['suffix']);
            } elseif (\array_key_exists('suffix', $data) && $data['suffix'] === null) {
                $object->setSuffix(null);
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
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['first_name'] = $object->getFirstName();
            }
            if ($object->isInitialized('middleName') && null !== $object->getMiddleName()) {
                $data['middle_name'] = $object->getMiddleName();
            }
            if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
                $data['last_name'] = $object->getLastName();
            }
            if ($object->isInitialized('suffix') && null !== $object->getSuffix()) {
                $data['suffix'] = $object->getSuffix();
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
            return [\NxSys\Library\Clients\Brex\API\Travel\Model\TravelerName::class => false];
        }
    }
}

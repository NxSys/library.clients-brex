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
    class LodgingBookingDataReservationDetailsRoomNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsRoom::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsRoom::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsRoom();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('display_name', $data) && $data['display_name'] !== null) {
                $object->setDisplayName($data['display_name']);
                unset($data['display_name']);
            } elseif (\array_key_exists('display_name', $data) && $data['display_name'] === null) {
                $object->setDisplayName(null);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('bed_type', $data) && $data['bed_type'] !== null) {
                $object->setBedType($data['bed_type']);
                unset($data['bed_type']);
            } elseif (\array_key_exists('bed_type', $data) && $data['bed_type'] === null) {
                $object->setBedType(null);
            }
            if (\array_key_exists('bed_count', $data) && $data['bed_count'] !== null) {
                $object->setBedCount($data['bed_count']);
                unset($data['bed_count']);
            } elseif (\array_key_exists('bed_count', $data) && $data['bed_count'] === null) {
                $object->setBedCount(null);
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
            if ($object->isInitialized('displayName') && null !== $object->getDisplayName()) {
                $data['display_name'] = $object->getDisplayName();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('bedType') && null !== $object->getBedType()) {
                $data['bed_type'] = $object->getBedType();
            }
            if ($object->isInitialized('bedCount') && null !== $object->getBedCount()) {
                $data['bed_count'] = $object->getBedCount();
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
            return [\NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsRoom::class => false];
        }
    }
} else {
    class LodgingBookingDataReservationDetailsRoomNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsRoom::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsRoom::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsRoom();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('display_name', $data) && $data['display_name'] !== null) {
                $object->setDisplayName($data['display_name']);
                unset($data['display_name']);
            } elseif (\array_key_exists('display_name', $data) && $data['display_name'] === null) {
                $object->setDisplayName(null);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('bed_type', $data) && $data['bed_type'] !== null) {
                $object->setBedType($data['bed_type']);
                unset($data['bed_type']);
            } elseif (\array_key_exists('bed_type', $data) && $data['bed_type'] === null) {
                $object->setBedType(null);
            }
            if (\array_key_exists('bed_count', $data) && $data['bed_count'] !== null) {
                $object->setBedCount($data['bed_count']);
                unset($data['bed_count']);
            } elseif (\array_key_exists('bed_count', $data) && $data['bed_count'] === null) {
                $object->setBedCount(null);
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
            if ($object->isInitialized('displayName') && null !== $object->getDisplayName()) {
                $data['display_name'] = $object->getDisplayName();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('bedType') && null !== $object->getBedType()) {
                $data['bed_type'] = $object->getBedType();
            }
            if ($object->isInitialized('bedCount') && null !== $object->getBedCount()) {
                $data['bed_count'] = $object->getBedCount();
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
            return [\NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsRoom::class => false];
        }
    }
}

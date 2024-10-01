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
    class RailBookingDataVehicleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataVehicle::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataVehicle::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataVehicle();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('carrier', $data) && $data['carrier'] !== null) {
                $object->setCarrier($data['carrier']);
                unset($data['carrier']);
            } elseif (\array_key_exists('carrier', $data) && $data['carrier'] === null) {
                $object->setCarrier(null);
            }
            if (\array_key_exists('timetable_id', $data) && $data['timetable_id'] !== null) {
                $object->setTimetableId($data['timetable_id']);
                unset($data['timetable_id']);
            } elseif (\array_key_exists('timetable_id', $data) && $data['timetable_id'] === null) {
                $object->setTimetableId(null);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
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
            if ($object->isInitialized('carrier') && null !== $object->getCarrier()) {
                $data['carrier'] = $object->getCarrier();
            }
            if ($object->isInitialized('timetableId') && null !== $object->getTimetableId()) {
                $data['timetable_id'] = $object->getTimetableId();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
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
            return [\NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataVehicle::class => false];
        }
    }
} else {
    class RailBookingDataVehicleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataVehicle::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataVehicle::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataVehicle();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('carrier', $data) && $data['carrier'] !== null) {
                $object->setCarrier($data['carrier']);
                unset($data['carrier']);
            } elseif (\array_key_exists('carrier', $data) && $data['carrier'] === null) {
                $object->setCarrier(null);
            }
            if (\array_key_exists('timetable_id', $data) && $data['timetable_id'] !== null) {
                $object->setTimetableId($data['timetable_id']);
                unset($data['timetable_id']);
            } elseif (\array_key_exists('timetable_id', $data) && $data['timetable_id'] === null) {
                $object->setTimetableId(null);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
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
            if ($object->isInitialized('carrier') && null !== $object->getCarrier()) {
                $data['carrier'] = $object->getCarrier();
            }
            if ($object->isInitialized('timetableId') && null !== $object->getTimetableId()) {
                $data['timetable_id'] = $object->getTimetableId();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
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
            return [\NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataVehicle::class => false];
        }
    }
}

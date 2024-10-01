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
    class RailBookingDataRailLegNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLeg::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLeg::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLeg();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('origin', $data)) {
                $object->setOrigin($this->denormalizer->denormalize($data['origin'], \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailStation::class, 'json', $context));
                unset($data['origin']);
            }
            if (\array_key_exists('destination', $data)) {
                $object->setDestination($this->denormalizer->denormalize($data['destination'], \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailStation::class, 'json', $context));
                unset($data['destination']);
            }
            if (\array_key_exists('departure_time', $data)) {
                $object->setDepartureTime($this->denormalizer->denormalize($data['departure_time'], \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegDepartureTime::class, 'json', $context));
                unset($data['departure_time']);
            }
            if (\array_key_exists('arrival_time', $data)) {
                $object->setArrivalTime($this->denormalizer->denormalize($data['arrival_time'], \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegArrivalTime::class, 'json', $context));
                unset($data['arrival_time']);
            }
            if (\array_key_exists('duration', $data) && $data['duration'] !== null) {
                $object->setDuration($data['duration']);
                unset($data['duration']);
            } elseif (\array_key_exists('duration', $data) && $data['duration'] === null) {
                $object->setDuration(null);
            }
            if (\array_key_exists('vehicle', $data)) {
                $object->setVehicle($this->denormalizer->denormalize($data['vehicle'], \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegVehicle::class, 'json', $context));
                unset($data['vehicle']);
            }
            if (\array_key_exists('seat', $data)) {
                $object->setSeat($this->denormalizer->denormalize($data['seat'], \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegSeat::class, 'json', $context));
                unset($data['seat']);
            }
            if (\array_key_exists('rail_class', $data)) {
                $object->setRailClass($data['rail_class']);
                unset($data['rail_class']);
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
            $data['origin'] = $this->normalizer->normalize($object->getOrigin(), 'json', $context);
            $data['destination'] = $this->normalizer->normalize($object->getDestination(), 'json', $context);
            $data['departure_time'] = $this->normalizer->normalize($object->getDepartureTime(), 'json', $context);
            $data['arrival_time'] = $this->normalizer->normalize($object->getArrivalTime(), 'json', $context);
            if ($object->isInitialized('duration') && null !== $object->getDuration()) {
                $data['duration'] = $object->getDuration();
            }
            if ($object->isInitialized('vehicle') && null !== $object->getVehicle()) {
                $data['vehicle'] = $this->normalizer->normalize($object->getVehicle(), 'json', $context);
            }
            if ($object->isInitialized('seat') && null !== $object->getSeat()) {
                $data['seat'] = $this->normalizer->normalize($object->getSeat(), 'json', $context);
            }
            if ($object->isInitialized('railClass') && null !== $object->getRailClass()) {
                $data['rail_class'] = $object->getRailClass();
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
            return [\NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLeg::class => false];
        }
    }
} else {
    class RailBookingDataRailLegNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLeg::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLeg::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLeg();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('origin', $data)) {
                $object->setOrigin($this->denormalizer->denormalize($data['origin'], \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailStation::class, 'json', $context));
                unset($data['origin']);
            }
            if (\array_key_exists('destination', $data)) {
                $object->setDestination($this->denormalizer->denormalize($data['destination'], \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailStation::class, 'json', $context));
                unset($data['destination']);
            }
            if (\array_key_exists('departure_time', $data)) {
                $object->setDepartureTime($this->denormalizer->denormalize($data['departure_time'], \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegDepartureTime::class, 'json', $context));
                unset($data['departure_time']);
            }
            if (\array_key_exists('arrival_time', $data)) {
                $object->setArrivalTime($this->denormalizer->denormalize($data['arrival_time'], \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegArrivalTime::class, 'json', $context));
                unset($data['arrival_time']);
            }
            if (\array_key_exists('duration', $data) && $data['duration'] !== null) {
                $object->setDuration($data['duration']);
                unset($data['duration']);
            } elseif (\array_key_exists('duration', $data) && $data['duration'] === null) {
                $object->setDuration(null);
            }
            if (\array_key_exists('vehicle', $data)) {
                $object->setVehicle($this->denormalizer->denormalize($data['vehicle'], \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegVehicle::class, 'json', $context));
                unset($data['vehicle']);
            }
            if (\array_key_exists('seat', $data)) {
                $object->setSeat($this->denormalizer->denormalize($data['seat'], \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegSeat::class, 'json', $context));
                unset($data['seat']);
            }
            if (\array_key_exists('rail_class', $data)) {
                $object->setRailClass($data['rail_class']);
                unset($data['rail_class']);
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
            $data['origin'] = $this->normalizer->normalize($object->getOrigin(), 'json', $context);
            $data['destination'] = $this->normalizer->normalize($object->getDestination(), 'json', $context);
            $data['departure_time'] = $this->normalizer->normalize($object->getDepartureTime(), 'json', $context);
            $data['arrival_time'] = $this->normalizer->normalize($object->getArrivalTime(), 'json', $context);
            if ($object->isInitialized('duration') && null !== $object->getDuration()) {
                $data['duration'] = $object->getDuration();
            }
            if ($object->isInitialized('vehicle') && null !== $object->getVehicle()) {
                $data['vehicle'] = $this->normalizer->normalize($object->getVehicle(), 'json', $context);
            }
            if ($object->isInitialized('seat') && null !== $object->getSeat()) {
                $data['seat'] = $this->normalizer->normalize($object->getSeat(), 'json', $context);
            }
            if ($object->isInitialized('railClass') && null !== $object->getRailClass()) {
                $data['rail_class'] = $object->getRailClass();
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
            return [\NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLeg::class => false];
        }
    }
}

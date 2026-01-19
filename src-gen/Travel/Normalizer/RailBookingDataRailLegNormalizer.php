<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
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
        }
        elseif (\array_key_exists('duration', $data) && $data['duration'] === null) {
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['origin'] = $this->normalizer->normalize($data->getOrigin(), 'json', $context);
        $dataArray['destination'] = $this->normalizer->normalize($data->getDestination(), 'json', $context);
        $dataArray['departure_time'] = $this->normalizer->normalize($data->getDepartureTime(), 'json', $context);
        $dataArray['arrival_time'] = $this->normalizer->normalize($data->getArrivalTime(), 'json', $context);
        if ($data->isInitialized('duration')) {
            $dataArray['duration'] = $data->getDuration();
        }
        if ($data->isInitialized('vehicle') && null !== $data->getVehicle()) {
            $dataArray['vehicle'] = $this->normalizer->normalize($data->getVehicle(), 'json', $context);
        }
        if ($data->isInitialized('seat') && null !== $data->getSeat()) {
            $dataArray['seat'] = $this->normalizer->normalize($data->getSeat(), 'json', $context);
        }
        if ($data->isInitialized('railClass') && null !== $data->getRailClass()) {
            $dataArray['rail_class'] = $data->getRailClass();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLeg::class => false];
    }
}
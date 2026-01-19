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
class AirBookingDataFlightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlight::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlight::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlight();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('origin', $data)) {
            $object->setOrigin($this->denormalizer->denormalize($data['origin'], \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightEndpoint::class, 'json', $context));
            unset($data['origin']);
        }
        if (\array_key_exists('destination', $data)) {
            $object->setDestination($this->denormalizer->denormalize($data['destination'], \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightEndpoint::class, 'json', $context));
            unset($data['destination']);
        }
        if (\array_key_exists('departure_time', $data)) {
            $object->setDepartureTime($this->denormalizer->denormalize($data['departure_time'], \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightDepartureTime::class, 'json', $context));
            unset($data['departure_time']);
        }
        if (\array_key_exists('arrival_time', $data)) {
            $object->setArrivalTime($this->denormalizer->denormalize($data['arrival_time'], \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightArrivalTime::class, 'json', $context));
            unset($data['arrival_time']);
        }
        if (\array_key_exists('duration', $data) && $data['duration'] !== null) {
            $object->setDuration($data['duration']);
            unset($data['duration']);
        }
        elseif (\array_key_exists('duration', $data) && $data['duration'] === null) {
            $object->setDuration(null);
        }
        if (\array_key_exists('confirmation_code', $data) && $data['confirmation_code'] !== null) {
            $object->setConfirmationCode($data['confirmation_code']);
            unset($data['confirmation_code']);
        }
        elseif (\array_key_exists('confirmation_code', $data) && $data['confirmation_code'] === null) {
            $object->setConfirmationCode(null);
        }
        if (\array_key_exists('cabin_class', $data)) {
            $object->setCabinClass($data['cabin_class']);
            unset($data['cabin_class']);
        }
        if (\array_key_exists('marketing_flight', $data)) {
            $object->setMarketingFlight($this->denormalizer->denormalize($data['marketing_flight'], \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightMarketingFlight::class, 'json', $context));
            unset($data['marketing_flight']);
        }
        if (\array_key_exists('operating_flight', $data)) {
            $object->setOperatingFlight($this->denormalizer->denormalize($data['operating_flight'], \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightOperatingFlight::class, 'json', $context));
            unset($data['operating_flight']);
        }
        if (\array_key_exists('seat', $data)) {
            $object->setSeat($this->denormalizer->denormalize($data['seat'], \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightSeat::class, 'json', $context));
            unset($data['seat']);
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
        if ($data->isInitialized('confirmationCode')) {
            $dataArray['confirmation_code'] = $data->getConfirmationCode();
        }
        if ($data->isInitialized('cabinClass') && null !== $data->getCabinClass()) {
            $dataArray['cabin_class'] = $data->getCabinClass();
        }
        if ($data->isInitialized('marketingFlight') && null !== $data->getMarketingFlight()) {
            $dataArray['marketing_flight'] = $this->normalizer->normalize($data->getMarketingFlight(), 'json', $context);
        }
        if ($data->isInitialized('operatingFlight') && null !== $data->getOperatingFlight()) {
            $dataArray['operating_flight'] = $this->normalizer->normalize($data->getOperatingFlight(), 'json', $context);
        }
        if ($data->isInitialized('seat') && null !== $data->getSeat()) {
            $dataArray['seat'] = $this->normalizer->normalize($data->getSeat(), 'json', $context);
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
        return [\NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlight::class => false];
    }
}
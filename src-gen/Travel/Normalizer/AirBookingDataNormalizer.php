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
class AirBookingDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingData::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingData::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('journeys', $data)) {
            $values = [];
            foreach ($data['journeys'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataJourney::class, 'json', $context);
            }
            $object->setJourneys($values);
            unset($data['journeys']);
        }
        if (\array_key_exists('tickets', $data)) {
            $values_1 = [];
            foreach ($data['tickets'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightTicket::class, 'json', $context);
            }
            $object->setTickets($values_1);
            unset($data['tickets']);
        }
        if (\array_key_exists('redress_number', $data)) {
            $object->setRedressNumber($this->denormalizer->denormalize($data['redress_number'], \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataRedressNumber::class, 'json', $context));
            unset($data['redress_number']);
        }
        if (\array_key_exists('known_traveler_number', $data)) {
            $object->setKnownTravelerNumber($this->denormalizer->denormalize($data['known_traveler_number'], \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataKnownTravelerNumber::class, 'json', $context));
            unset($data['known_traveler_number']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getJourneys() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['journeys'] = $values;
        $values_1 = [];
        foreach ($data->getTickets() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['tickets'] = $values_1;
        if ($data->isInitialized('redressNumber') && null !== $data->getRedressNumber()) {
            $dataArray['redress_number'] = $this->normalizer->normalize($data->getRedressNumber(), 'json', $context);
        }
        if ($data->isInitialized('knownTravelerNumber') && null !== $data->getKnownTravelerNumber()) {
            $dataArray['known_traveler_number'] = $this->normalizer->normalize($data->getKnownTravelerNumber(), 'json', $context);
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingData::class => false];
    }
}
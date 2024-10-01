<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Travel\Normalizer;

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
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            \NxSys\Library\Clients\Brex\API\Travel\Model\Address::class => AddressNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AddressCoordinates::class => AddressCoordinatesNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AddressGeoCoordinates::class => AddressGeoCoordinatesNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingData::class => AirBookingDataNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataRedressNumber::class => AirBookingDataRedressNumberNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataKnownTravelerNumber::class => AirBookingDataKnownTravelerNumberNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataDocumentNumber::class => AirBookingDataDocumentNumberNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlight::class => AirBookingDataFlightNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightDepartureTime::class => AirBookingDataFlightDepartureTimeNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightArrivalTime::class => AirBookingDataFlightArrivalTimeNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightMarketingFlight::class => AirBookingDataFlightMarketingFlightNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightOperatingFlight::class => AirBookingDataFlightOperatingFlightNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightSeat::class => AirBookingDataFlightSeatNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightEndpoint::class => AirBookingDataFlightEndpointNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightEndpointAirportLocation::class => AirBookingDataFlightEndpointAirportLocationNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightNumber::class => AirBookingDataFlightNumberNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightTicket::class => AirBookingDataFlightTicketNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataJourney::class => AirBookingDataJourneyNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\Booking::class => BookingNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\BookingTime::class => BookingTimeNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingData::class => CarRentalBookingDataNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataCarDetails::class => CarRentalBookingDataCarDetailsNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpoint::class => CarRentalBookingDataRentalEndpointNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpointLocation::class => CarRentalBookingDataRentalEndpointLocationNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpointTime::class => CarRentalBookingDataRentalEndpointTimeNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetails::class => CarRentalBookingDataReservationDetailsNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetailsPickup::class => CarRentalBookingDataReservationDetailsPickupNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetailsDropOff::class => CarRentalBookingDataReservationDetailsDropOffNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingData::class => LodgingBookingDataNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataContactInfo::class => LodgingBookingDataContactInfoNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetails::class => LodgingBookingDataLodgingDetailsNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetailsContactInformation::class => LodgingBookingDataLodgingDetailsContactInformationNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetailsLocation::class => LodgingBookingDataLodgingDetailsLocationNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetails::class => LodgingBookingDataReservationDetailsNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckInTime::class => LodgingBookingDataReservationDetailsCheckInTimeNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckoutTime::class => LodgingBookingDataReservationDetailsCheckoutTimeNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsRoom::class => LodgingBookingDataReservationDetailsRoomNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataRoom::class => LodgingBookingDataRoomNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\PageBooking::class => PageBookingNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\PageTrip::class => PageTripNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingData::class => RailBookingDataNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailJourney::class => RailBookingDataRailJourneyNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLeg::class => RailBookingDataRailLegNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegDepartureTime::class => RailBookingDataRailLegDepartureTimeNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegArrivalTime::class => RailBookingDataRailLegArrivalTimeNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegVehicle::class => RailBookingDataRailLegVehicleNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegSeat::class => RailBookingDataRailLegSeatNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailSeat::class => RailBookingDataRailSeatNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailStation::class => RailBookingDataRailStationNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailStationLocation::class => RailBookingDataRailStationLocationNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataVehicle::class => RailBookingDataVehicleNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\Traveler::class => TravelerNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\TravelerName::class => TravelerNameNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\Trip::class => TripNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\TripTraveler::class => TripTravelerNormalizer::class,

            \Jane\Component\JsonSchemaRuntime\Reference::class => \NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\ReferenceNormalizer::class,
        ];
        protected $normalizersCache = [];

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);

            return $denormalizer->denormalize($data, $type, $format, $context);
        }

        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }

        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;

            return $normalizer;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [
                \NxSys\Library\Clients\Brex\API\Travel\Model\Address::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AddressCoordinates::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AddressGeoCoordinates::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingData::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataRedressNumber::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataKnownTravelerNumber::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataDocumentNumber::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlight::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightDepartureTime::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightArrivalTime::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightMarketingFlight::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightOperatingFlight::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightSeat::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightEndpoint::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightEndpointAirportLocation::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightNumber::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightTicket::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataJourney::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\Booking::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\BookingTime::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingData::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataCarDetails::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpoint::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpointLocation::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpointTime::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetails::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetailsPickup::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetailsDropOff::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingData::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataContactInfo::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetails::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetailsContactInformation::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetailsLocation::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetails::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckInTime::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckoutTime::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsRoom::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataRoom::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\PageBooking::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\PageTrip::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingData::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailJourney::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLeg::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegDepartureTime::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegArrivalTime::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegVehicle::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegSeat::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailSeat::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailStation::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailStationLocation::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataVehicle::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\Traveler::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\TravelerName::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\Trip::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\TripTraveler::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            \NxSys\Library\Clients\Brex\API\Travel\Model\Address::class => AddressNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AddressCoordinates::class => AddressCoordinatesNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AddressGeoCoordinates::class => AddressGeoCoordinatesNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingData::class => AirBookingDataNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataRedressNumber::class => AirBookingDataRedressNumberNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataKnownTravelerNumber::class => AirBookingDataKnownTravelerNumberNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataDocumentNumber::class => AirBookingDataDocumentNumberNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlight::class => AirBookingDataFlightNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightDepartureTime::class => AirBookingDataFlightDepartureTimeNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightArrivalTime::class => AirBookingDataFlightArrivalTimeNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightMarketingFlight::class => AirBookingDataFlightMarketingFlightNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightOperatingFlight::class => AirBookingDataFlightOperatingFlightNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightSeat::class => AirBookingDataFlightSeatNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightEndpoint::class => AirBookingDataFlightEndpointNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightEndpointAirportLocation::class => AirBookingDataFlightEndpointAirportLocationNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightNumber::class => AirBookingDataFlightNumberNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightTicket::class => AirBookingDataFlightTicketNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataJourney::class => AirBookingDataJourneyNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\Booking::class => BookingNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\BookingTime::class => BookingTimeNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingData::class => CarRentalBookingDataNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataCarDetails::class => CarRentalBookingDataCarDetailsNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpoint::class => CarRentalBookingDataRentalEndpointNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpointLocation::class => CarRentalBookingDataRentalEndpointLocationNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpointTime::class => CarRentalBookingDataRentalEndpointTimeNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetails::class => CarRentalBookingDataReservationDetailsNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetailsPickup::class => CarRentalBookingDataReservationDetailsPickupNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetailsDropOff::class => CarRentalBookingDataReservationDetailsDropOffNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingData::class => LodgingBookingDataNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataContactInfo::class => LodgingBookingDataContactInfoNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetails::class => LodgingBookingDataLodgingDetailsNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetailsContactInformation::class => LodgingBookingDataLodgingDetailsContactInformationNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetailsLocation::class => LodgingBookingDataLodgingDetailsLocationNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetails::class => LodgingBookingDataReservationDetailsNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckInTime::class => LodgingBookingDataReservationDetailsCheckInTimeNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckoutTime::class => LodgingBookingDataReservationDetailsCheckoutTimeNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsRoom::class => LodgingBookingDataReservationDetailsRoomNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataRoom::class => LodgingBookingDataRoomNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\PageBooking::class => PageBookingNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\PageTrip::class => PageTripNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingData::class => RailBookingDataNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailJourney::class => RailBookingDataRailJourneyNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLeg::class => RailBookingDataRailLegNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegDepartureTime::class => RailBookingDataRailLegDepartureTimeNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegArrivalTime::class => RailBookingDataRailLegArrivalTimeNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegVehicle::class => RailBookingDataRailLegVehicleNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegSeat::class => RailBookingDataRailLegSeatNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailSeat::class => RailBookingDataRailSeatNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailStation::class => RailBookingDataRailStationNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailStationLocation::class => RailBookingDataRailStationLocationNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataVehicle::class => RailBookingDataVehicleNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\Traveler::class => TravelerNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\TravelerName::class => TravelerNameNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\Trip::class => TripNormalizer::class,

            \NxSys\Library\Clients\Brex\API\Travel\Model\TripTraveler::class => TripTravelerNormalizer::class,

            \Jane\Component\JsonSchemaRuntime\Reference::class => \NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\ReferenceNormalizer::class,
        ];
        protected $normalizersCache = [];

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);

            return $denormalizer->denormalize($data, $type, $format, $context);
        }

        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }

        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;

            return $normalizer;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [
                \NxSys\Library\Clients\Brex\API\Travel\Model\Address::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AddressCoordinates::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AddressGeoCoordinates::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingData::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataRedressNumber::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataKnownTravelerNumber::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataDocumentNumber::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlight::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightDepartureTime::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightArrivalTime::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightMarketingFlight::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightOperatingFlight::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightSeat::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightEndpoint::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightEndpointAirportLocation::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightNumber::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightTicket::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataJourney::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\Booking::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\BookingTime::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingData::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataCarDetails::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpoint::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpointLocation::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpointTime::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetails::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetailsPickup::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetailsDropOff::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingData::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataContactInfo::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetails::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetailsContactInformation::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetailsLocation::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetails::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckInTime::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckoutTime::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsRoom::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataRoom::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\PageBooking::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\PageTrip::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingData::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailJourney::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLeg::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegDepartureTime::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegArrivalTime::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegVehicle::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegSeat::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailSeat::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailStation::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailStationLocation::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataVehicle::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\Traveler::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\TravelerName::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\Trip::class => false,
                \NxSys\Library\Clients\Brex\API\Travel\Model\TripTraveler::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
}
